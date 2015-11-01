<?php
session_start();
require_once('../model/loginfuncs.php');
if(!userIsLogged()){header('Location: ../view_con/login.php');exit();}
$err=null;
require_once('../model/db-config.php');
	$query = 'SELECT * FROM users WHERE uid = ' .$_SESSION['user_id'] ;
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);   
	$name = $row['name'];

if (isset($_POST['file-submit'])) {
	require_once('u-submit.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Ed-Free::</title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/profile.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free, Education" />
<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
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
					<img src="https://www.drupal.org/files/profile_default.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $name; ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>

					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
            	<div>
            		<form method ='post' enctype="multipart/form-data" action="#">
            			<h2>Upload Files</h2><br/><br/>
            			<p><?php if($err!=null){echo $err;}?></p>
            			<h3>Choose anyone</h3><br/>
            			<br/><input type='radio' name='type' value='vid-link' /> Video Link<br/>
            			<input type='text' name='vid-url' placeholder='Video Link'/><br/>

						<br/><input type='radio' name='type' value='page-link' /> Video from page<br/>
            			<input type='text' name='page-url' placeholder='Page Link'  /><br/>

            			<br/><input type='radio' name='type' value='video' />Upload from computer<br/>
            			<input type='file' name='video' /><br/>


            			<select class='tagsSelect' id='tagsSelect' name='tagsSelect' multiple="multiple">
            				<option disabled>Select tags</option>
            				<?php
            				$q = 'SELECT * FROM tags';
            				$result = mysqli_query($conn, $q);
							if (mysqli_num_rows($result) > 0) {
    // output data of each row
    						while($row = mysqli_fetch_assoc($result)) {
    							$id = $row['tag-id'];
    							$tag = $row['tag-name'];
    							echo "<option value='$id'>$tag</option>";
    						}
    						}  
            				?>
            			</select>
            			<br/>
            			<input type='submit' name='file-submit' />

            		</form>
            	</div>
			   
            </div>
		</div>
	</div>
</div>
<script>
$(".tagsSelect").select2({placeholder: "Select tags",tags: true});
</script
</body>
</html>