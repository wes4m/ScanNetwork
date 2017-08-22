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
			<button href="<?php echo base_url();?>/home/register" class="btn btn-default btn-dissabled" type="button">
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


    <!-- Docs page layout -->
    <div class="bs-docs-header" id="content">
      <div class="container">
        <h1>ScanNetwork</h1>
        <p>Scan your files safe & secure. with no worry about distruption, and share your anti virtus with others. </p>
      </div>
    </div>
	
			
	<div class="process">
    <div class="process-row">
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><h2><i class="glyphicon glyphicon-user"></i></h2></button>
            <p>Register</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><h2><i class="glyphicon glyphicon-globe"></i></h2></button>
            <p>Be a contribtuor</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><h2><i class="glyphicon glyphicon-search"></i></h2></button>
            <p>Scan files</p>
        </div> 
         <div class="process-step">
            <button type="button" class="btn btn-success btn-circle" disabled="disabled"><h2><i class="glyphicon glyphicon-ok"></i></h2></button>
            <p>You're Done</p>
        </div> 
    </div>
</div>


    </br></br>
	
	<div class="container bs-docs-container">
      <div class="row">
		<div class="col-md-12" role="main">
			<div class="bs-docs-section">
				<h1 id="js-overview" class="page-header">Register</h1>
			
			
			<div class="container">
	<div class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="active"><a href="#step-1">
                    <h4 class="list-group-item-heading"><i class="glyphicon glyphicon-user"></i></h4>
                    <p class="list-group-item-text">Register a new user</p>
                </a></li>
                <li class="disabled"><a href="#step-2">
                    <h4 class="list-group-item-heading"><i class="glyphicon glyphicon-globe"></i></h4>
                    <p class="list-group-item-text">Be a contribtour</p>
                </a></li>
                <li class="disabled"><a href="#step-3">
                    <h4 class="list-group-item-heading"><i class="glyphicon glyphicon-ok"></i></h4>
                    <p class="list-group-item-text">Fininshing </p>
                </a></li>
            </ul>
        </div>
	</div>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            
                
				<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form">
			<h2>Register new user <small>account information</small></h2>
			<hr class="colorgraph">

			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Be Contribtour</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Next</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Next" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

				
               <!-- <button id="activate-step-2" class="btn btn-primary btn-lg">Activate Step 2</button> -->
            
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                <h1 class="text-center"> STEP 2</h1>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                <h1 class="text-center"> STEP 3</h1>
            </div>
        </div>
    </div>
</div>
			
				
			</div>
		</div>
	</div>
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

	
	
	
	