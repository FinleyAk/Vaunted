const Discord = require("discord.js");
const CommandLoader = require("../handlers/CommandLoader");

class Vaunted {
    /**
     * Creates the Vaunted Command Handler Client
     * @constructor
     * @param {String} token - Token for discord login.
     * @param {Object} options - The vaunted client options.
     */
    constructor(token, options) {
        if (!token) throw new Error("No token provided");
        if (!options.prefix) throw new Error("No prefix provided");

        this.client = new Discord.Client();
        this.token = token;
        this.options = options;

        this.commandLoader = new CommandLoader(this.client, this.options);

        this.client.on("message", msg => {
            if (this.options.ignoreBots) {
                if (msg.author.bot) return;
            };
            if (msg.content === this.options.prefix) return;
            if (!msg.content.toLowerCase().startsWith(this.options.prefix.toLowerCase())) return;

            const command = msg.content.toLowerCase().split(" ")[0].slice(this.options.prefix.length);
            const args = msg.content.split(" ").slice(1);

            const { commands, aliases } = this.client;

            let Command;
            if (commands.has(command)) {
                Command = commands.get(command);
            } else if (aliases.has(command)) {
                Command = commands.get(aliases.get(command));
            };

            if (Command) new Command.run().run(this.client, msg, args);
        });
    }

    /**
     * Logs into discord also loads commands.
     */
    login() {
        this.commandLoader.loadAllCommands();

        this.client.login(this.token);

        this.client.once("ready", () => {
            if (this.options.logging) console.log("Discord logged in!");
        });
    }
}

module.exports = Vaunted;