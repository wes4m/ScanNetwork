

<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" id="submit" value="Submit">

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>assest/js/socket.io.min.js"></script>
<script src="<?php echo base_url();?>assest/js/socket.io-stream.js"></script>
<script src="<?php echo base_url();?>assest/js/spark-md5.min.js"></script>
<script>
  $(function(){

var socket = io.connect('http://127.0.0.1:8080');
var stream = ss.createStream();

socket.on('connect', function(){
});


socket.on('total', function(data){
  console.log("bitch : "+ data.antivirus + "  " +data.contribute);
});


document.getElementById("file").addEventListener("change", function(e) {
    var blobSlice = File.prototype.slice || File.prototype.mozSlice || File.prototype.webkitSlice,
        file = this.files[0],
        filehash = '',
        chunkSize = 2097152,                               // read in chunks of 2MB
        chunks = Math.ceil(file.size / chunkSize),
        currentChunk = 0,
        spark = new SparkMD5.ArrayBuffer(),
        frOnload = function(e) {
            console.log("read chunk nr", currentChunk + 1, "of", chunks);
            spark.append(e.target.result);                 // append array buffer
            currentChunk++;

            if (currentChunk < chunks) {
                loadNext();
            }
            else {
               console.log("finished loading");
               filehash = spark.end();
               console.info("computed hash", spark.end()); // compute hash
            }
        },
        frOnerror = function () {
          alret('please try again.');
            console.warn("oops, something went wrong.");
        };

    function loadNext() {
        var fileReader = new FileReader();
        fileReader.onload = frOnload;
        fileReader.onerror = frOnerror;

        var start = currentChunk * chunkSize,
            end = ((start + chunkSize) >= file.size) ? file.size : start + chunkSize;

        fileReader.readAsArrayBuffer(blobSlice.call(file, start, end));
    };

    loadNext();

    $('#submit').click(function(){

      //var file = this.files[0];// e.target.files[0];
      var stream = ss.createStream();

      // upload a file to the server.
      ss(socket).emit('upload', stream, {name:file.name,size: file.size,hash:filehash});
      ss.createBlobReadStream(file).pipe(stream);

  var blobStream = ss.createBlobReadStream(file);
  var size = 0;

  blobStream.on('data', function(chunk) {
    size += chunk.length;
    console.log(Math.floor(size / file.size * 100) + '%');
  });

  blobStream.pipe(stream);

});



});
});
</script>
