// Require packages
const path = require('path');
global.appRoot = path.resolve(__dirname);
const Discord = require("discord.js");
const client = new Discord.Client();
const mysql = require('mysql');
const log4js = require('log4js');
const commandHandler = require('./core/handlers/commandHandler');
const eventHandler = require('./core/handlers/eventHandler.js');
const logo = require('asciiart-logo');
const name = require('./package.json');
require('dotenv').config();
const fs = require('fs');
var colors = require('colors');

splashscreen();

function handle() {
    process.on('unhandledRejection', (reason, promise) => {
        console.log('')
    })
}
function main() {
    configureLogging();
    if (eventHandler() || commandHandler() || configCheck()) 
        return;
    
    let client = new Discord.Client();
    client
        .__listeners
        .forEach(listener => client.on(listener.event, listener.function));

    client.on("message", async (message) => {




        if (message.content === `<@${client.user.id}>`) {
            return message
                .channel
                .send(`**My prefix is** \`${process.env.BOT_PREFIX}\``);
        }
        if (message.content === `<@!${client.user.id}>`) {
            return message
                .channel
                .send(`**My prefix is** \`${process.env.BOT_PREFIX}\``);
        }

        if (message.content === client.user) {
            return message
                .channel
                .send(`**My prefix is** \`${process.env.BOT_PREFIX}\``);
        }

    });

    client.__listeners = undefined;
    delete client.__listeners;
    client.login(process.env.BOT_TOKEN);
}

// Connect to db in different file
client.on('ready', () => {
    splashscreen();
    configureLogging();
    console.log('Online')
    var con = mysql.createConnection(
        {host: process.env.DB_HOST, user: process.env.DB_USERNAME, password: process.env.DB_PASSWORD, database: process.env.DB_DATABASE}
    );
    con.connect(function (err) {
        let logger = Discord.Client.prototype.logger;
        if (err) 
            logger.warn(err);
        logger.info('Connected to db');
    })

})

// Configure Logging
function configureLogging() {
    log4js.configure(require('./logConfig.js'));

    let logger = Discord.Client.prototype.logger = log4js.getLogger('Main');

    logger.trace('Logger successfully setup');
};

function createConfig() {

    fs.copyFileSync('templates/config/env', '.env');
    console.log(colors.red(
        "No enviroment file found. Creating new .env file. Please update the credential" +
        "s inside and re-run."
    ));

}
function splashscreen() {
    console.log(colors.rainbow((logo(name).render())));
}

function configCheck() {
    if (process.env.BOT_TOKEN == "") {
        console.log(colors.red(
            "Please update the credentials (BOT_TOKEN) in the .env file, then re-run the bo" +
            "t"
        ))
    }
    if (!fs.existsSync('.env')) {
        createConfig();
    }
}
// handle();



main();
