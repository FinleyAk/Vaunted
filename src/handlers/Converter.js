/**
 * Serializes the command data.
 * @param {Object} metadata - The command metadata.
 * @param {VauntedCommand} run - The class for the command.
 * 
 * @param {String} metadata.name - The name and or command name for the command class.
 * @param {Array} metadata.aliases - All the aliases associated with the command.
 * @param {String} metadata.description - The description of the command.
 * @param {Number} metadata.priority - The priority of the command.
 */
const Convert = (metadata, run) => {
    if (!run) throw new Error("You must provide a command runnable!");
    if (!metadata) throw new Error("You must provide command metadata!");
    if (!metadata.name) throw new Error("You must provide a command name!");

    const discordCommand = {
        run,
        conf: {
            aliases: metadata.aliases || []
        },
        help: {
            name: metadata.name,
            description: metadata.description || "",
            priority: metadata.priority || 1
        }
    };

    return discordCommand;
};

module.exports = Convert;