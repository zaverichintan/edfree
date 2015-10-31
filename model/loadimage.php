<?php
if(isset($_GET['getThumb'])){
	$id = $_GET['getThumb'];
	require_once('db-config.php');
	$query = "SELECT * FROM videos WHERE 'video-id' = '$id'";
	//echo $query;
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);   
	$videoID = $row["id"];
	//echo $videoID;
	//http://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg
	$remoteImage = "http://img.youtube.com/vi/".$videoID."/0.jpg";
	header('Content-Type: image/jpg');
	readfile($remoteImage);
}