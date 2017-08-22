//just test stuff

var io = require('socket.io').listen(8080);
io.set('log level', 1);

var result = {};

result['DE6BA2BA991CE7D626E79CCF74BE3C00'] = { Antivirus: 'IKARUS',
  LastUpdate: '18/8/2014',
  bitch: 'Win32.SuspectCrc',
  HASH: 'DE6BA2BA991CE7D626E79CCF74BE3C00' };


io.on('connection', function(socket){
console.log('wessam');

socket.on('getresults',function(data)
{
var   hash = data.filehash;
  console.log('he want : '  + hash.toUpperCase() + ' to ' + socket.id);
  socket.to(socket.id).emit('resultsdone',{results:result[hash.toUpperCase()].bitch});

});





});

/*
var ursa = require("ursa");

var clearText = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
var bigText = "";
for(var i = 0; i < 100; i++){
    bigText += i +" " + clearText + "\n";
}

var keySizeBits = 1024;
var keyPair = ursa.generatePrivateKey(keySizeBits, 65537);

var encrypted = encrypt(bigText, keySizeBits/8);
console.log(encrypted);

var decrypted = decrypt(encrypted, keySizeBits/8);
console.log(decrypted);

function encrypt(clearText, keySizeBytes){
    var buffer = new Buffer(clearText);
    var maxBufferSize = keySizeBytes - 42; //according to ursa documentation
    var bytesDecrypted = 0;
    var encryptedBuffersList = [];

    //loops through all data buffer encrypting piece by piece
    while(bytesDecrypted < buffer.length){
        //calculates next maximun length for temporary buffer and creates it
        var amountToCopy = Math.min(maxBufferSize, buffer.length - bytesDecrypted);
        var tempBuffer = new Buffer(amountToCopy);

        //copies next chunk of data to the temporary buffer
        buffer.copy(tempBuffer, 0, bytesDecrypted, bytesDecrypted + amountToCopy);

        //encrypts and stores current chunk
        var encryptedBuffer = keyPair.encrypt(tempBuffer);
        encryptedBuffersList.push(encryptedBuffer);

        bytesDecrypted += amountToCopy;
    }

    //concatenates all encrypted buffers and returns the corresponding String
    return Buffer.concat(encryptedBuffersList).toString('base64');
}

function decrypt(encryptedString, keySizeBytes){

    var encryptedBuffer = new Buffer(encryptedString, 'base64');
    var decryptedBuffers = [];

    //if the clear text was encrypted with a key of size N, the encrypted
    //result is a string formed by the concatenation of strings of N bytes long,
    //so we can find out how many substrings there are by diving the final result
    //size per N
    var totalBuffers = encryptedBuffer.length / keySizeBytes;

    //decrypts each buffer and stores result buffer in an array
    for(var i = 0 ; i < totalBuffers; i++){
        //copies next buffer chunk to be decrypted in a temp buffer
        var tempBuffer = new Buffer(keySizeBytes);
        encryptedBuffer.copy(tempBuffer, 0, i*keySizeBytes, (i+1)*keySizeBytes);
        //decrypts and stores current chunk
        var decryptedBuffer = keyPair.decrypt(tempBuffer);
        decryptedBuffers.push(decryptedBuffer);
    }

    //concatenates all decrypted buffers and returns the corresponding String
    return Buffer.concat(decryptedBuffers).toString();
}


/*
var list = [];
var lisst = {};


var w = {}
var b = {id:0,av:"avira",ip:"127.0.0.1"}
var c = {id:4,av:"avira",ip:"127.0.0.1"}
var d = {id:5,av:"avast",ip:"127.0.0.1"}
var e = {id:8,av:"avast",ip:"127.0.0.1"}
var f = {id:2,av:"kasper",ip:"127.0.0.1"}

w['foo'] = b;
w['bee'] = c;
w['fqwe'] = d;
w['rew3we'] = e;
w['geew'] = f;

for (var key in w)
  {
  if (list.indexOf(w[key].av) < 0)
    {
    list.push(w[key].av);
    list.push(w[key].id);

    }
  }

lisst['ss'] = {name:'porno',total:(list.length/2) - 1,result:'clean bitch'}
console.log(lisst['ss'].total);
list.forEach(function(entry) {

  if (typeof(entry)=== 'string')
    {

      if (lisst['ss'].total > 0)
        {
          console.log(entry);
          lisst['ss'].total = (lisst['ss'].total - 1);
          console.log(lisst['ss'].total);
        }else{
           console.log('entry');
        }
    }
});

*/
