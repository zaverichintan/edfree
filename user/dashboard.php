<?php



?>
<!DOCTYPE html>
<html>
<head>
<title>Ed-Free::</title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
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
<body>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="http://www.sofdule.com/loadimage?uid=$id&view=pic" class="img-responsive" alt="$fname's pic" title="$fname's pic" onclick="ppicviewer($id)"/>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						$fname $lname
					</div>
					<div class="profile-status">Status:  $quote </div><br/>
					<div class="profile-usertitle-job">
						$type
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm" onclick="$action1" id="to" >$btntxt1</button>
					<button type="button" class="btn btn-danger btn-sm" onclick="sendmsg($id)" >Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active" id="overview">
							<a href="#" onclick="loadcontent('o','a')" >
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li class="inactive" id="about">
							<a href="#" onclick="loadcontent('a','b')" >
							<i class="glyphicon glyphicon-user"></i>
							About </a>
						</li>
						<li class="inactive" id="prod">
							<a href="#"  onclick="loadcontent('p','c')">
							<i class="glyphicon glyphicon-ok"></i>
							 Products</a>
						</li>
						<li class="inactive" id="more">
							<a href="#" onclick="loadcontent('m','d')" >
							<i class="glyphicon glyphicon-flag"></i>
							More</a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
<div class="col-md-8">
            <div class="profile-content">
			   Some user related content goes here...
            </div>
		</div>
		<div class="col-md-1">
            Chat Bar
            </div>
	</div>
</div>
<script>var cb=function(){var e=document.createElement("link");e.rel="stylesheet",e.href="../css/profile.css";var t=document.getElementsByTagName("head")[0];t.parentNode.insertBefore(e,t)},raf=requestAnimationFrame||mozRequestAnimationFrame||webkitRequestAnimationFrame||msRequestAnimationFrame;raf?raf(cb):window.addEventListener("load",cb);var cb=function(){var e=document.createElement("link");e.rel="stylesheet",e.href="../css/bootstrap.min.css";var t=document.getElementsByTagName("head")[0];t.parentNode.insertBefore(e,t)},raf=requestAnimationFrame||mozRequestAnimationFrame||webkitRequestAnimationFrame||msRequestAnimationFrame;raf?raf(cb):window.addEventListener("load",cb);var cb=function(){var e=document.createElement("link");e.rel="stylesheet",e.href="../css/profile.css";var t=document.getElementsByTagName("head")[0];t.parentNode.insertBefore(e,t)},raf=requestAnimationFrame||mozRequestAnimationFrame||webkitRequestAnimationFrame||msRequestAnimationFrame;raf?raf(cb):window.addEventListener("load",cb);</script>