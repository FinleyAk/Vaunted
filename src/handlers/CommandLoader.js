const fs = require("fs");
const path = require("path");
const appDir = path.dirname(require.main.filename);
const Discord = require("discord.js");

class CommandLoader {
    /**
     * Adds/Removes/Loads commands
     * @constructor
     * @param {Client} client - Discord client.
     * @param {Object} options - The command loader options.
     */
    constructor(client, options) {
        this.client = client;
        this.client.commands = new Discord.Collection();
        this.client.aliases = new Discord.Collection();

        this.options = options;
        this.loadedCommands = [];
    }

    /**
     * Sets commands metadata
     */
    setCommands() {
        this.loadedCommands.map(cmd => {
            this.client.commands.set(cmd.help.name, cmd);
            cmd.conf.aliases.map(alias => this.client.aliases.set(alias, cmd.help.name));
        });
    }

    /**
     * Loads a single command.
     * @param {String} fileName - The name of the file you would like to load.
     * @return {Array} All of the loaded commands.
     */
    loadCommand(fileName) {
        if (!fileName) throw new Error("No file name provided!");

        const file = require(this.options.commandDir ? path.join(`${this.options.commandDir}/${fileName}`) : path.join(`${appDir}/commands/${fileName}`));
        if (!file) throw new Error(`${this.options.commandDir}/${fileName}` || `${appDir}/commands/${fileName}`);

        if (this.options.logging == "INFO") console.log(`Loaded command: ${file.help.name}`);

        this.loadedCommands.push(file);
        this.setCommands();

        return this.loadedCommands;
    }

    /**
     * Loads all commands in the default or custom directory.
     * @return {Array} The loaded commands.
     */
    loadAllCommands() {
        const commands = fs.readdirSync(this.options.commandDir ? path.join(this.options.commandDir) : path.join(`${appDir}/commands/`)).filter(file => file.endsWith(".js"));
        if (!commands) throw new Error(`No directory found ${this.options.commandDir || `${__dirname}/commands`}`);

        commands.map(cmd => this.loadCommand(cmd));

        return this.loadedCommands;
    }

    /**
     * Adds a command using the file name.
     * @param {String} name - The name of the file waiting to be loaded.
     * @return {Array} The loaded commands.
     */
    addCommand(name) {
        return this.loadCommand(name);
    }

    /**
     * Removes a command.
     * @param {String} command - The file name of the command to be removed.
     * @return {Object|Boolean} The removed command or false if failed.
     */
    removeCommand(command) {
        this.client.commands.delete(command);

        this.loadedCommands.map((cmd, index) => {
            if (cmd.help.name === command) {
                cmd.conf.aliases.map(a => {
                    this.client.aliases.delete(a);
                });

                this.loadedCommands.splice(index, 1);

                return cmd;
            };
        });

        return false;
    }

    /**
     * Get all the loaded commands.
     * @return {Array} All the loaded commands.
     */
    getCommands() {
        return this.loadedCommands;
    }
}

module.exports = CommandLoader;