const fs = require('fs');
const path = require('path');
const appDir = path.dirname(require.main.filename);
const Discord = require('discord.js');

class CommandLoader {
    constructor(client, options) {
        this.client = client;
        this.client.commands = new Discord.Collection();
        this.client.aliases = new Discord.Collection();

        this.options = options;
        this.loadedCommands = [];
    }

    setCommands() {
        this.loadedCommands.map(cmd => {
            this.client.commands.set(cmd.help.name, cmd);
            cmd.conf.aliases.map(alias => this.client.aliases.set(alias, cmd.help.name));
        });
    }

    loadCommand(fileName) {
        if (!fileName) throw new Error("No file name provided!");

        const file = require(this.options.commandDir ? path.join(`${this.options.commandDir}/${fileName}`) : path.join(`${appDir}/commands/${fileName}`));
        if (!file) throw new Error(`${this.options.commandDir}/${fileName}` || `${appDir}/commands/${fileName}`);

        if (this.options.logging == "INFO") console.log(`Loaded command: ${file.help.name}`);

        this.loadedCommands.push(file);
        this.setCommands();

        return this.loadedCommands;
    }

    loadAllCommands() {
        const commands = fs.readdirSync(this.options.commandDir ? path.join(this.options.commandDir) : path.join(`${appDir}/commands/`)).filter(file => file.endsWith('.js'));
        if (!commands) throw new Error(`No directory found ${this.options.commandDir || `${__dirname}/commands`}`);

        commands.map(cmd => this.loadCommand(cmd));

        return this.loadedCommands;
    }

    addCommand(name) {
        return this.loadCommand(name);
    }

    getCommands() {
        return this.loadedCommands;
    }
}

module.exports = CommandLoader;