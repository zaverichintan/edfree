<?php
if(isset($_POST['file-submit'])&&isset($_POST['type'])){
	$type = $_POST['type'];
	if($type=='vid-link'){
		if(isset($_POST['vid-url'])){
			$videoURL = $_POST['vid-url'];
			$video = file_get_contents('$videoURL);
			


		}else{
			$err = 'You Selected Video link but didn\'t add a link';
		}
	}elseif ($type=='page-link') {

		

	}elseif ($type=='video') {
		

	}else{
		$err='Incomplete Form';
	}



}else{
	$err = 'fill all details';
}


?>