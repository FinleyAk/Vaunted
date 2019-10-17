const { VauntedCommand, VauntedCommandSerializer } = require('../..');

class Ping extends VauntedCommand {
    constructor() {
        super();
    }

    run(client, msg, args) {
        msg.channel.send('ping ' + client.ping);
    }
}

module.exports = VauntedCommandSerializer({name: "ping"}, Ping);