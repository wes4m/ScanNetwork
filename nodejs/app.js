var port = 8080;
var io = require('socket.io');
var ss = require('socket.io-stream');
var fs  = require('fs');
var express = require('express');
var app = express();
var volunteers = {};
var result = {};
var io = require('socket.io').listen(app.listen(port));


//express config

	// Set .html as the default template extension
app.set('view engine', 'html');
// Initialize the ejs template engine
app.engine('html', require('ejs').renderFile);
// Tell express where it can find the templates
app.set('views', __dirname + '/view');
// Make the files in the public folder available to the world
app.use(express.static(__dirname + '/public'));

app.use(errorHandler);
app.use(logErrors);
io.set('log level', 1);
//error handling :
function logErrors(err, req, res, next) {
  console.error(err.stack);
  next(err);
}

function errorHandler(err, req, res, next) {
  res.status(500);
  res.render('error', { error: err });
}

//express routing
app.get('/', function(req, res){
  res.render('scanner');
});


app.get('/download/:hash', function(req, res){
  var file = __dirname + '/files/'+result[req.param('hash')].file_name;
  res.download(file);
});


app.get('/results/:hash', function(req, res){
  console.log(req.param('hash'));
  var hash = req.param('hash');
  if (result[hash.toUpperCase()])
    {
//result[hash.toUpperCase()] = {file_name:'server.exe',bitch:"{0}Avira|Clean|123{0}KK|NN|123",file_date:'2014/8/17'};
res.render('result',{file_result:result[hash.toUpperCase()].bitch,file_hash:hash.toUpperCase(),file_name:result[hash.toUpperCase()].file_name,file_date:result[hash.toUpperCase()].file_date});
    }else{
      res.send('result notfound-');
    }

});


app.get('contribt', function(req, res){
  res.send('-');
});

app.get('developers', function(req, res){
  res.send('-');
});

app.get('*', function(req, res){
  res.status(404).send('404');
});
//socket.io stuff
io.on('connection', function(socket){
  // testing shit
  console.log('hello');

  socket.emit('total', { antivirus: total_antivirus(volunteers),contribute:Object.keys(volunteers).length });

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
	
	 console.log(result_backup);
	 result[data.HASH].total = result[data.HASH].total-1;
	 
   if (result[data.HASH].total>0)
     {
       
       if (result[data.HASH].total = 0)
         {
                 console.log(result_whore);
                    result[data.HASH].bitch = result_backup;
                    result[data.HASH].client.emit('yes');
         }
     }else if(result[data.HASH].total<=0)
       {
            result[data.HASH].bitch = result_backup;
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
    var filepath = __dirname+ '/files/' + name ;
    stream.pipe(fs.createWriteStream(filepath));
var hash  = data.hash;
console.log(hash);
console.log(hash.toUpperCase());
    result[hash.toUpperCase()] = {file_name:name,total:0,bitch:' ',file_date:new Date().toJSON(),client:socket};
    console.log(result[hash.toUpperCase()]);
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


result[file_hash].total = total_antivirus(volunteers);


list.forEach(function(entry) {
  if (entry.indexOf('|') < 0)
    {
      volunteers[entry].emit('RecvFile',{FileLink:'http://localhost:8080/download/'+file_hash,HASH:file_hash});
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


console.log('Your application is running on http://localhost:' + port);
