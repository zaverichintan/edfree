<?php if(!isset($_GET['load'])){header("Location: ../index.php");} 
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
<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
					<li><a href="videos.php"><div class="video"><i class="videos"></i><i class="videos1"></i></div></a></li>
					<?php if(userIsLogged()){echo '<li><a href="/edfree/user/logout.php"><img src="../user/logout.php"/></a>';} ?>

				</ul>
			</div>
		<div class="main">
		<div class="single-content">
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
			<div class="container">
				<div class="row">
					<?php
					$id = $_GET['load'];
					$query = 'SELECT * FROM videos WHERE id = ' .$id ;
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_assoc($result);   
					$videoID = $row["youtube-id"];
					echo'<iframe style="margin-right:3%;" width="60%" height="480" src="https://www.youtube.com/embed/'.$videoID.'" frameborder="0" allowfullscreen></iframe>';

					/*echo "TAGS: ";
					$arr = $row['tags'];
					foreach ($arr as $key => $value) {
						echo '$value';
					}*/

					echo '<br/>';echo '<br/>';echo '<br/>';
					echo $row['details'];
					echo '<br/>';echo '<br/>';echo '<br/>';
					?>

					</div>
				</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			<?php 
			 for($i=1; $i<6; $i++){
			 	$imgUrl = getThumb($i);//model/loadimage.php?getThumb='.$i;//getThumb function get here
			 	$im = getVideo($i);
			echo '<a href="../view_con/single.php?load='.$im.' " ><li><img src="'.$imgUrl.'" alt="Thumbs"/></li></a>';			 	
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
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="../js/jquery.flexisel.js"></script>
		</div>		
	<div class="footer">
		<h6>Disclaimer : </h6>
		<p class="claim">This is a freebies and not an official website, I have no intention of disclose any movie, brand, news.My goal here is to train or excercise my skill and share this freebies.</p>
		<a href="example@mail.com">example@mail.com</a>
		<div class="copyright">
			<p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
		</div>
	</div>	
	</div>
	<div class="clearfix"></div>
	</div>
</body>
</html>