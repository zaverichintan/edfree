<?php
session_start();
require_once('../model/loginfuncs.php');
if(userIsLogged()){loadAuth();}
$err = null;
if(isset($_POST['register'])){
  require_once('../model/process_reg.php');
}
?>
</head>
<!DOCTYPE html>
<html>
<head>
	<title>EdFree::Registration</title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://www.w3schools.com/lib/w3.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free, Education" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

</head>
<body>
<div class="top-header">
	<div class="logo">
			<a href="../index.php"><img src="../images/logo.png" alt="" /></a>
					<p>Educating India</p>
	</div>
				<div class="search" >
					<form action="">
						<input type="text" name="term" placeholder="Search.."/>
						<input type="submit" value="submit" />
					</form>
				</div>
        <div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div><script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=True&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
				<div class="clearfix"></div>
</div>	
<div class="w3-container w3-card-4">
  <form method="post" name="Registration-Form"  enctype="multipart/form-data" action="#">
  <h2>Create Account</h2>
  <?php if($err!=null){echo $err;} ?>
  <label>Full Name</label>
  <input class="w3-input" type="text" style="width:90%" name="Name">
  <label>Email</label>
  <input class="w3-input" type="email" style="width:90%" name="Email">
  <label>Password</label>
  <input class="w3-input" type="password" style="width:90%" name="Pass">
  <label>Retype Password</label>
  <input class="w3-input" type="password" style="width:90%" name="Rpass"><br/>
  <!--<div class="g-recaptcha" data-sitekey="6LfNdA4TAAAAAB6Xd35LmVfd8KDExZVlNH3ppN0s"></div>-->
  <br/>
  <button class="w3-btn w3-teal w3-section" type="submit" name="register">Register</button>
  <p>By Clicking register you agree to our terms and conditions.</p>
</form>
</div>
</body>
</html>