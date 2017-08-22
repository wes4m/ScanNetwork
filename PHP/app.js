var io = require('socket.io').listen(8080);
var ss = require('socket.io-stream');
var fs  = require('fs');

io.set('log level', 1);
var volunteers = {};
var result = {};
var files = [];

io.on('connection', function(socket){
  // testing shit
  var address = socket.handshake.address; //updated the way we bring the ip address because the original way is not yet implemented in socket.io v0.9.16

  console.log('hello ' +  address.address);

  //socket.emit('total', { antivirus: total_antivirus(volunteers),contribute:Object.keys(volunteers).length });

  socket.on('new_volunteer', function(data){ // for c# application
    socket.av = "av|"+data.av;
    volunteers[socket.id] = socket;
	var address = socket.handshake.address; //updated the way we bring the ip address because the original way is not yet implemented in socket.io v0.9.16
    console.log("antivirus : " + data.av + " from " + address.address + " connected");
  });



  socket.on('receive.result', function(data){
    console.log(data);
// for c# application
    var result_backup = '';
    result_backup = result_backup + "{0}"+data.Antivirus+"|"+data.Result+"|"+data.LastUpdate;
   if (result[data.HASH].total>0)
     {
       result[data.HASH].total = result[data.HASH].total-1;
       if (result[data.HASH].total = 0)
         {
                 console.log(result_whore);
                    result[data.HASH].bitch = result_backup;
                    result[data.HASH].client.emit('yes');

                  //  socket.broadcast.emit('yes');
         }
     }else if(result[data.HASH].total<=0)
       {
            result[data.HASH].bitch = result_backup;
              //    socket.broadcast.emit('yes');
              result[data.HASH].client.emit('yes');
       }
  });


socket.on('getresults',function(data)
{
var   hash = data.filehash;
  console.log('he want : '  + hash.toUpperCase() + ' to ' + socket.id);
  if(result[hash.toUpperCase()])
    {
      socket.to(socket.id).emit('resultsdone',{results:result[hash.toUpperCase()].bitch});

    }

});

  socket.on('disconnect', function() { // not for anyone
  if (volunteers[socket.id])
    {
      var address = socket.handshake.address;
      console.log("antivirus : " + volunteers[socket.id].av + " from " + address.address + " disconnected");
    delete volunteers[socket.id];
    }

  });



 ss(socket).on('upload', function(stream, data) { // for web application
   console.log('file uploading');
   var name = gstring() + "_" + data.name;
    var filepath = __dirname+ '/application/files/' + name ;
    stream.pipe(fs.createWriteStream(filepath));
var hash  = data.hash;
console.log(hash);
console.log(hash.toUpperCase());
    result[hash.toUpperCase()] = {file_name:name,total:0,bitch:' ',client:socket};
    send_file(name,hash.toUpperCase())
  });



});

function send_file(file_name,file_hash)
{
  console.log('sending file');
var list = [];
for (var key in volunteers)
  {
  if (list.indexOf(volunteers[key].av) < 0)
    {
    list.push(volunteers[key].av);
    list.push(key);
    }
  }


result[file_hash].total = (list.length/2) - 1;


list.forEach(function(entry) {
  if (entry.indexOf('|') < 0)
    {
      volunteers[entry].emit('RecvFile',{FileLink:'http://localhost/scannetwork/PHP/download/name/'+file_name,HASH:file_hash});
      console.log('file sent to ' + entry + 'with hash :' + file_hash);
    }
});

}

function gstring()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

function total_antivirus(w)
{
var i = 0;

 var list = [];
  for (var key in w)
    {
    if (list.indexOf(w[key].av) < 0)
      {
      list.push(w[key].av);
      }
    }

  list.forEach(function(entry) {

        i++;
  });
  return i;
}
