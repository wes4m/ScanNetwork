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
        <li class="active">
          <a href="<?php echo base_url();?>">Home</a>
        </li>
		<li>
          <a href="<?php echo base_url();?>home/scanner">Scanner</a>
        </li>
        <li>
          <a href="http://getbootstrap.com/css">Contribtours</a>
        </li>
        <li>
          <a href="http://getbootstrap.com/components">API</a>
        </li>
        <li>
          <a href="http://getbootstrap.com/javascript">Developers</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <p></p>
        <div class ="dropdown">
			<button href="<?php echo base_url();?>/home/register" class="btn btn-default" type="button">
				Register
			</button>
		
		<!-- login dropdwon start-->
       
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
				Login
			</button>
            <div class="dropdown-menu" style="padding:17px;">
              <form class="form-horizontal" role="form">
					<p><font color="#ffffff">....................................................................</font></p>
					<div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                    </div>
					
					
					
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                        </div>
                    </div>
                  
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
					<p><font color="#ffffff">....................................................................</font></p>
					
                  </form>
                </div>


		  
		</div>
		
      </ul>
	  <!-- login dropdwon end-->
	  
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
						
						
						<h4><span class="label label-info"> placeholder.ong</span></h4>
						<h5><i class="glyphicon glyphicon-barcode"></i><b> Md5 Hash : </b>DDKD849830939RD94C00</h5>
						<h5><i class="glyphicon glyphicon-import"></i><b> Scan date : </b>2014/8/17</h5>
						</br>
						<h5><i class="glyphicon glyphicon-search"></i><b> Scan results : </b>0/1</h5>
						<div class="progress results-bar" data-toggle="tooltip" data-placement="bottom" title="Scan results : 0/1">
							<div class="progress-bar progress-bar-success" style="width: 100%">
								<span class="sr-only">100% Complete (success)</span>
							</div>
	
							<div class="progress-bar progress-bar-danger" style="width: 0%">
								<span class="sr-only">0% Complete (danger)</span>
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
          <tr>
            <td><b>Avira</b></td>
            <td><font color="green">Clean</font></td>
            <td><a href="#">Avira shows that the file is clean.</a></td>
          </tr>
		   <tr class="active">
            <td><b>Avast</b></td>
            <td>Offline</td>
            <td>ScanNetwork haven't found a avast contribtoure at the time.</td>
          </tr>
		</tbody>
</table>

			    </div>
			</div>
		</div>
	</div>
	


				
				<div class="bs-callout bs-callout-primary">
					<h4>How does ScanNetwork work ?</h4>
					<p>ScanNetowk is nothing without it's contrebtours. by our contribtours we grow.</p>
					<p>ScanNetowk uses the contribtuors anti virused to scan the files users send.</p>
					<p>ScanNetwork searches for the online cotribtoures and scans the files using thir anti viruses.</p>
					<p>then it collects the whole results. and shows it to the user.</p>
				</div>

				
<!-- footer -->
<footer class="bs-docs-footer" role="contentinfo">
	<div class="container">
		    <div class="bs-docs-social">
  <ul class="bs-docs-social-buttons">
    <li>
      <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=uncodersc&amp;repo=unHooker&amp;type=fork&amp;count=true" title="Fork on GitHub" height="20" width="102"></iframe>
    </li>
    <li class="follow-btn">
      <iframe style="width: 242px; height: 20px;" data-twttr-rendered="true" title="Twitter Follow Button" class="twitter-follow-button twitter-follow-button" src="http://platform.twitter.com/widgets/follow_button.1407888064.html#_=1408032596916&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=dpcoders&amp;show_count=true&amp;show_screen_name=true&amp;size=m" allowtransparency="true" scrolling="no" id="twitter-widget-1" frameborder="0"></iframe>
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

<script>
$('.results-bar').tooltip()
</script>
	