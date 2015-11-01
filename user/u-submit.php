<?php
require_once('../model/db-config.php');
if(isset($_POST['file-submit'])&&isset($_POST['type'])&&isset($_POST['tagsSelect'])){
	$type = $_POST['type'];
	if($type=='vid-link'){
		if(isset($_POST['vid-url'])){
			$videoURL = $_POST['vid-url'];
			//$video = file_get_contents($videoURL);
			$id = $_SESSION['user-id'];
			$tags =$_POST['tagsSelect'];
			$q = "INSERT INTO temp_uploads (uploadURL,Tby,tags) VALUES ('$videoURL','$id','$tags')";
			mysqli_query($conn, $q);
		}else{
			$err = 'You Selected Video link but didn\'t add a link';
		}
	}elseif ($type=='page-link') {
		if(isset($_POST['page-url'])){
			require_once('../model/crawl.class.php');
			$URL = $_POST['page-url'];
			//crawl url and get video.
			$crawl = new Crawl($URL);
			$videoURL = $crawl->getVideoLink();

			$id = $_SESSION['user-id'];
			$tags =$_POST['tagsSelect'];
			$q = "INSERT INTO temp_uploads (uploadURL,Tby,tags) VALUES ('$videoURL','$id','$tags')";
			mysqli_query($conn, $q);	
		}else{
			$err = 'You Selected Page link but didn\'t add a link';
		}
		

	}elseif ($type=='video') {
		if(isset($_FILES['video'])){
			//save uploaded video.
			
			
$target_dir = "temp/";
$target_file = $target_dir . basename($_FILES["video"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["video"]["tmp_name"]);
    if($check !== false) {
        //"File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $err = "File is not an image.";
        $uploadOk = 0;
    }
// Check if file already exists
if (file_exists($target_file)) {
    $err =  "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["video"]["size"] > 500000000) {
    $err = "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "mp4" && $imageFileType != "mov" && $imageFileType != "avi"
&& $imageFileType != "gif" ) {
    $err = "Sorry, only mp4, mov, avi & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //$err = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["video"]["name"]). " has been uploaded.";
    } else {
        $err = "Sorry, there was an error uploading your file.";
    }
}
			$id = $_SESSION['user-id'];
			$tags =$_POST['tagsSelect'];
			$q = "INSERT INTO temp_uploads (uploadURL,Tby,tags) VALUES ('$videoURL','$id','$tags')";
			mysqli_query($conn, $q);



		}else{
			$err = 'You Selected to upload video but didn\'t upload a video';
		}		

	}else{
		$err='Incomplete Form';
	}



}else{
	$err = 'fill all details';
}


?>