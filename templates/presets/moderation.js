const fs = require("fs");
const log4js = require("log4js");
var colors = require("colors");
function createMute() {
    if (fs.existsSync("commands/moderation/mute.js")) {
        console.log(colors.blue("Checking if mute.js exists..."));
        console.log(colors.green("mute.js found. Ignoring."))
    } else {
        console.log(colors.blue("Checking if mute.js exists..."));
        console.log(colors.red("False"));
        fs.copyFileSync("templates/commands/moderation/muteTemplate.js", "commands/moderation/mute.js");
        console.log(colors.blue("Added the 'mute.js' command."));
        console.log(colors.cyan("Adding moderation preset"));
    }
}

function createBan() {
    if (fs.existsSync("commands/moderation/ban.js")) {
        console.log(colors.blue("Checking if ban.js exists..."));
        console.log(colors.green("ban.js found. Ignoring."))
    } else {
        console.log(colors.blue("Checking if ban.js exists..."));
        console.log(colors.red("False"));
        fs.copyFileSync("templates/commands/moderation/banTemplate.js", "commands/moderation/ban.js");
        console.log(colors.blue("Added the 'ban.js' command."));
        console.log(colors.cyan("Adding moderation preset"));
    }
}

function createUnmute() {
    if (fs.existsSync("commands/moderation/unmute.js")) {
        console.log(colors.blue("Checking if unmute.js exists..."));
        console.log(colors.green("unmute.js found. Ignoring."));
    } else {
        console.log(colors.blue("Checking if unmute.js exists..."));
        console.log(colors.red("False"));
        fs.copyFileSync("templates/commands/moderation/unmuteTemplate.js", "commands/moderation/unmute.js");
        console.log(colors.blue("Added the 'unmute.js' command."));
        console.log(colors.cyan("Adding moderation preset"));
    }

}
if (fs.existsSync("commands/moderation")) {
    createMute();
    createBan();
    createUnmute();
} else {
    fs.mkdirSync("commands/moderation");
    createMute();
    createBan();
    createUnmute();
}
