 <!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.">
<meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

<title>

    ScanNetwork

</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>assest/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assest/css/custome.css" rel="stylesheet">


<!-- Documentation extras -->
<link href="<?php echo base_url();?>assest/css/docs.css" rel="stylesheet">

    <!-- Docs master nav -->
    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="http://getbootstrap.com/" class="navbar-brand">ScanNetwork</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="<?php echo base_url();?>">Home</a>
        </li>
        <li>
          <a href="http://getbootstrap.com/css">Contribtours</a>
        </li>
        <li>
          <a href="http://getbootstrap.com/javascript">Developers</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <p></p>

    </nav>
  </div>
</header>




</br></br></br></br>
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-10 col-md-offset-1">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<div class="panel-title">


						<h4><span class="label label-info"> server.exe</span></h4>
						<h5><i class="glyphicon glyphicon-barcode"></i><b> Md5 Hash : </b><a id="file-hash" value="<?php echo $hash; ?>"><?php echo $hash; ?></a></h5>
						<h5><i class="glyphicon glyphicon-import"></i><b> Scan date : </b><a>2014/8/17</a></h5>
						</br>
						<h5><i class="glyphicon glyphicon-search"></i><b> Scan results : </b><a id="rs_ratio">Checking..</a></h5>
						<div class="progress results-bar">
							<div id="clean_progress" class="progress-bar progress-bar-success" style="width: 0%">
								<span class="sr-only">0% Complete (success)</span>
							</div>

							<div id="inf_progress" class="progress-bar progress-bar-danger" style="width: 0%">
								<span class="sr-only">100% Complete (danger)</span>
							</div>
						</div>


					</div>
			 	</div>

			  	<div class="panel-body">

<table class="table">
        <thead>
          <tr>
            <th>AntiVirus Name</th>
            <th>Result</th>
          </tr>
        </thead>
        <tbody>
          <tr id="avira_c">
            <td><b>Avira</b></td>
            <td id="avira">Scanning ..</td>
			<td id="avira_u"></td>
            <td>..</td>
          </tr>
		   <tr id="avast_c">
            <td><b>Avast</b></td>
            <td id="avast">Scanning ..</td>
			<td id="avast_u"></td>
            <td>..</td>
          </tr>
		  
		  <tr id="ikarus_c">
            <td><b>Ikarus</b></td>
            <td id="ikarus">Scanning ..</td>
			<td id="ikarus_u"></td>
            <td>..</td>
          </tr>
		  
		  
		</tbody>
</table>

			    </div>
			</div>
		</div>
	</div>




		

<!-- footer -->
<footer class="bs-docs-footer" role="contentinfo">
	<div class="container">
		    <div class="bs-docs-social">
  <ul class="bs-docs-social-buttons">
    <li class="follow-btn">
    <a href="https://twitter.com/Scan_Network" class="twitter-follow-button" data-show-count="false">Follow @Scan_Network</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>
    </li>

  </ul>
</div>


    <p>Designed and built by <a href="#">Bazaid</a> & <a href="#" target="_blank">unCoder</a> & <a href="#" target="_blank">Simon-Benyo</a></p>
    <p>Special thanks to <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>Code and desgined using <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">Bootstrap</a>, runtime worker using <a href="http://creativecommons.org/licenses/by/3.0/">node js</a>. with the help of <a href="http://creativecommons.org/licenses/by/3.0/">c# desktop client</a></p>
    <ul class="bs-docs-footer-links muted">

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="dpcoders.1@gmail.com">
<input type="hidden" name="lc" value="SA">
<input type="hidden" name="item_name" value="ScanNetwork">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


	</div>
</footer>


	</html>

	<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url();?>assest/js/jquery.js"></script>
<script src="<?php echo base_url();?>assest/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assest/js/docs.js"></script>
<script src="<?php echo base_url();?>assest/js/socket.io.min.js"></script>
<script>

function ProgressSet(var clean)
{

	var anti_pr_ra = 314.9685; // prgress percent ( parent width = 945. /100 = 9.? * progress percent 33.33 = 314 )

	if (clean)
	{
		document.getElementById("clean_progress").style.width += anti_pr_ra;
	} else {
	
		document.getElementById("inf_progress").style.width += anti_pr_ra;
	}
	
	
}

$(function(){


alert(document.getElementById("clean_progress").style.width);
var socket = io.connect('http://37.106.70.49:8080');


socket.on('connect', function(){
console.log('connect');
	console.log('<?php echo $hash; ?>');
     socket.emit('getresults', {filehash:'<?php echo $hash; ?>'});
	 console.log('hash send');
	 
});


socket.on('resultsdone', function(data){
console.log('got it');
console.log(data.results);

   var IKARUS =false,AVIRA =false,AVAST =false;
   var results = data.results.split('{0}');
   results.forEach(function(result)  {   
	
		var currResult = result.split('|');
		var AvName = currResult[0];
		var AvResult = currResult[1];
		var AvUpdate = currResult[2];
		var rs_ratio = 0;
		
		
		if(AvName == 'Avira')
		{
			AVRIA = true;
			$("#avira").text(''+AvResult);
			$("#avira_u").text(''+AvUpdate);
			if(AvResult == 'Clean')
			{ $("#avira").css('color', 'green'); ProgressSet(true); } else { $("#avira").css('color', 'red'); rs_ratio += 1; $("#rs_ratio").text(''+rs_ratio+'/3'); ProgressSet(false);}
		}
		if(AvName == 'Avast')
		{
			AVAST = true;
			$("#avast").text(''+AvResult);
			$("#avast_u").text(''+AvUpdate);
			if(AvResult == 'Clean')
			{ $("#avast").css('color', 'green'); ProgressSet(true); } else { $("#avast").css('color', 'red'); rs_ratio += 1; $("#rs_ratio").text(''+rs_ratio+'/3'); ProgressSet(false);}
		}
		if(AvName == 'IKARUS')
		{
			IKARUS = true;
			$("#ikarus").text(''+AvResult);
			$("#ikarus_u").text(''+AvUpdate);
			if(AvResult == 'Clean')
			{ $("#ikarus").css('color', 'green'); ProgressSet(true); } else { $("#ikarus").css('color', 'red'); rs_ratio += 1; $("#rs_ratio").text(''+rs_ratio+'/3'); ProgressSet(false);}
		}
		
  
	});
	
			// offline checking - missed anti virtuses
		if(AVIRA == false) {
			$("#avira").text('Offline');
			$("#avira_c").addClass('active'); }
		if(AVAST == false) {
			$("#avast").text('Offline');
			$("#avast_c").addClass('active'); }
		if(IKARUS == false) {
			$("#ikarus").text('Offline');
			$("#ikarus_c").addClass('active'); }
			
   
   


});

});

</script>

