<?php
session_start();
require_once('model/loginfuncs.php');
require_once('model/funcs.php');
if(userIsLogged()){
	$con = <<<html
	<a class="video upload" href="user/dashboard.php"><i class="video1 reg"></i>Upload</a>
	<a class="video watch" href="view_con/videos.php"><i class="video1 log"></i>Watch</a>
html;

}else{
	$con = <<<html
	<a class="video register" href="view_con/register.php"><i class="video1 reg"></i>Register</a>
	<a class="video login" href="view_con/login.php"><i class="video1 log"></i>Login</a>

html;

}
if(isset($_GET['term'])){
	require_once('model/process_search.php');
}

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
					<form action="">
						<input type="text" name="term" placeholder="Search.."/>
						<input type="submit" value="submit" />
					</form>
					<?php echo $con;?>
				</div>
				<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div><script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=True&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
				<div class="clearfix"></div>
			</div>
			
		</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			 <?php 
			 for($i=1; $i<6; $i++){
			 	$imgUrl = getThumb($i);//model/loadimage.php?getThumb='.$i;//getThumb function get here
			 	$im = getVideo($i);
			echo '<a href="view_con/single.php?load='.$im.' " ><li><img src="'.$imgUrl.'" alt="Thumbs"/></li></a>';			 	
			 }
			?>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>

	<div class="footer">
		<h6>Disclaimer : </h6>
		<p class="claim"> hack made @ InOut 2.0 <br> For educational purpose only , we made for helping out students in Rural India</p>
		<div class="copyright">
			<p>Copyright<a href="#">&copy;EdFree</a></p>
		</div>
	</div>	
	</div>
	</div>
	<div class="clearfix"></div>
</body>
</html>
