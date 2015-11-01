<?php
if(isset($_POST['file-submit'])&&isset($_POST['type'])){
	$type = $_POST['type'];
	if($type=='vid-link'){
		if(isset($_POST['vid-url'])){
			$videoURL = $_POST['vid-url'];
			//$video = file_get_contents($videoURL);
			$q = 'INSERT INTO temp_uploads (uploadURL,Tby) VALUES(?,?)';
			$stmt = $conn->prepare($q);
			$stmt->bind_param("si", $videoURL,$_SESSION['user-id']);
			$stmt->execute();
			$stmt->close();
			
		}else{
			$err = 'You Selected Video link but didn\'t add a link';
		}
	}elseif ($type=='page-link') {
		if(isset($_POST['page-url'])){
			$videoURL = $_POST['page-url'];
			//crawl url and get video.

		}else{
			$err = 'You Selected Page link but didn\'t add a link';
		}
		

	}elseif ($type=='video') {
		if(isset($_FILES['video'])){
			//save uploaded video.




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