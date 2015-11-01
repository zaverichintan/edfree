<?php

if(isset($_GET['term'])){
	function test_input($data) {
$servername = "localhost";
$username = "Ed-Free";
$password = "password@me";
$dbname = "edfree";
$conn = new mysqli($servername, $username, $password, $dbname);

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($conn,$data);
  $data = strip_tags($data);
  return $data;
}
	$searchTerm = test_input($_GET['term']);

?>
<!DOCTYPE html>
<html>
<head>
<title>Ed Free</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free, Education" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			<div class="menu">
				<ul>
					<li><a class="active" href="../index.php"><i class="home"></i></a></li>
					<li><a href="view_con/videos.php"><div class="video"><i class="videos"></i><i class="videos1"></i></div></a></li>
					<?php if(userIsLogged()){echo '<li><a href="/edfree/user/logout.php"><img src="../user/logout.php"/></a>';} ?>

				</ul>
			</div>
		<div class="main">
		<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
					<p>Educating India</p>
				</div>
				<div class="search" >
					<form action="../index.php">
						<input type="text" name="term" placeholder="Search.."/>
						<input type="submit" value="submit" />
					</form>
					<?php echo $con;?>
				</div>
				<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div><script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=True&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
				<div class="clearfix"></div>
			</div>
			
		</div>

	</div>
	<div class='container'>
		<h2>Search Results</h2>



	</div>


<?php } ?>