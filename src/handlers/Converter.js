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