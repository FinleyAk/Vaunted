const { Vaunted } = require('..');

const client = new Vaunted("token", {logging: "INFO", prefix: "v!"});

client.login();