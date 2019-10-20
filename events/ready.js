const {Client, client} = require('discord.js');
const colors = require('colors');
module.exports = function ready() {
    Client.prototype.logger.info('Up and running');
    console.log(colors.magenta.underline("Thank you for using Vaunted, we hope you have a great experience."));
};