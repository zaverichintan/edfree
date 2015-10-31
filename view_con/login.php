<?php
session_start();
$err = null;
if(isset($_POST['register'])){
  require_once('../model/process_login.php');
}
?>
</head>
<!DOCTYPE html>
<html>
<head>
	<title>EdFree::Login</title>
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
					<p>Curated Education</p>
	</div>
				<div class="search" >
					<form action="">
						<input type="text" name="term" placeholder="Search.."/>
						<input type="submit" value="submit" />
					</form>
				</div>
				<div class="clearfix"></div>
</div>	
<div class="w3-container w3-card-4">
  <form method="post" name="Login-Form"  enctype="multipart/form-data" action="#">
  <h2>Login</h2>
  <?php if($err!=null){echo $err;} ?>
  <label>Email</label>
  <input class="w3-input" type="email" style="width:90%" name="Email">
  <label>Password</label>
  <input class="w3-input" type="password" style="width:90%" name="Pass">
  <!--<div class="g-recaptcha" data-sitekey="6LfNdA4TAAAAAB6Xd35LmVfd8KDExZVlNH3ppN0s"></div>-->
  <br/>
  <button class="w3-btn w3-teal w3-section" type="submit" name="login">Login</button>
</form>
</div>
</body>
</html>