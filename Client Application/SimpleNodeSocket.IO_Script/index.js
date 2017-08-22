var io = require("socket.io").listen(3000);

io.sockets.on("connection", function (socket) {
   socket.on("new_volunteer", function (data) {
      console.log("Client sent: " + data.av);
   });
});