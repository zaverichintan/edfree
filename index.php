<?php
session_start();
require_once('model/loginfuncs.php');
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
<title>Ed-Free::</title>
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
					<li><a href="view_con/reviews.php"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="view_con/contact.php"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
		<div class="main">
		<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
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
			<div class="header-info">
				<h1>Top Viewed Video</h1>
				<p class="tags"><a href="#">Tags:</a><?php echo 'Tags will display here'; ?></p>
				<p class="review">Views	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;  <?php echo 'view-count';?></p>
				<p class="special"></p>
				<?php echo $con;?>
			</div>
		</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			 <?php 
			 for($i=1; $i<6; $i++){
			 	$imgUrl = 'images/r'.$i.'.jpg'; //getThumb function get here
			echo '<li><img src="'.$imgUrl.'" alt="Thumbs"/></li>';			 	
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
		<!--<div class="video">
			<iframe  src="https://www.youtube.com/embed/<?php echo'2LqzF5WauAw'; ?>" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="news">
			<div class="col-md-6 news-left-grid">
				<h3>Don’t be late,</h3>
				<h2>Book your ticket now!</h2>
				<h4>Easy, simple & fast.</h4>
				<a href="#"><i class="book"></i>BOOK TICKET</a>
				<p>Get Discount up to <strong>10%</strong> if you are a member!</p>
			</div>
			<div class="col-md-6 news-right-grid">
				<h3>News</h3>
				<div class="news-grid">
					<h5>Lorem Ipsum Dolor Sit Amet</h5>
					<label>Nov 11 2014</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
				<div class="news-grid">
					<h5>Lorem Ipsum Dolor Sit Amet</h5>
					<label>Nov 11 2014</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
				<a class="more" href="#">MORE</a>
			</div>
			<div class="clearfix"></div>
		</div>-->

		<div class="more-reviews">
			 <ul id="flexiselDemo2">
			 <?php 
			 for($i=1; $i<5; $i++){
			 	$imgUrl = 'images/m'.$i.'.jpg'; //getThumb function get here
			echo '<li><img src="'.$imgUrl.'" alt="Thumbs"/></li>';			 	
			 }
			?>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo2").flexisel({
				visibleItems: 4,
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
						visibleItems: 3
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>	
	<div class="footer">
		<h6>Disclaimer : </h6>
		<p class="claim">This is a freebies and not an official website, I have no intention of disclose any movie, brand, news.My goal here is to train or excercise my skill and share this freebies.</p>
		<a href="example@mail.com">example@mail.com</a>
		<div class="copyright">
			<p>Copyright<a href="#">&copy;EdFree</a></p>
		</div>
	</div>	
	</div>
	</div>
	<div class="clearfix"></div>
</body>
</html>
