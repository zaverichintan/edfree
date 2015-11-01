<?php
require_once('../model/db-config.php');
require_once('../model/loginfuncs.php');
require_once('../model/funcs.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Ed Free</title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			<div class="menu">
				<ul>
					<li><a href="../index.php"><div class="hm"><i class="home1"></i><i class="home2"></i></div></a></li>
					<li><a class="active" href="videos.php"><div class="video"><i class="videos"></i><i class="videos1"></i></div></a></li>
					<?php if(userIsLogged()){echo '<li><a href="/edfree/user/logout.php"><img src="../user/logout.php"/></a>';} ?>

				</ul>
			</div>
		<div class="main">
		<div class="video-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="../index.php"><img src="../images/logo.png" alt="" /></a>
					<p>Educating India</p>
				</div>
				<div class="search v-search">
					<form action='../index.php'>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div><script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=True&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
				<div class="clearfix"></div>
			</div>
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3 class="head">Latest Colletcion of videos</h3>
					</div>
				</div>
				<!-- pop-up-box --> 
		<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
		<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
		 <script>
				$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
				});
		</script>		

		<!--//pop-up-box -->

				<div class="content-grids">
				<?php
					for($i=0;i<6;i++){
						$con=<<<html
					<div class="content-grid">
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="../images/gridallbum1.jpg" title="allbum-name" /></a>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
						<ul>
							<li><a href="#"><img src="../images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="../images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="../images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Watch now</a>
					</div>
					<div id="small-dialog" class="mfp-hide">
						<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
					</div>						

html;


							
					}

				?>

					<div class="clearfix"> </div>
					<!---start-pagenation-->

					<div class="clearfix"> </div>
					<!---End-pagenation---->
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>	
		<div class="footer">
		<h6>Disclaimer : </h6>
		<p class="claim"> hack made @ InOut 2.0 <br> For educational purpose only , we made for helping out students in Rural India</p>
		<div class="copyright">
			<p>Copyright<a href="#">&copy;EdFree</a></p>
		</div>
	</div>	
	</div>
	<div class="clearfix"></div>
	</div>
</body>
</html>