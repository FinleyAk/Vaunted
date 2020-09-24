const { VauntedCommand, VauntedCommandSerializer } = require('../..');

class Ping extends VauntedCommand {
    constructor() {
        super();
    }

    run(client, msg, args) {
        const embed = this.embed({title: `Ping ${client.ping}`});

        msg.channel.send(embed);
    }
}

module.exports = VauntedCommandSerializer({name: "ping"}, Ping);