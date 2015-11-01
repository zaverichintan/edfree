<?php

function  getThumb($id){
$servername = "localhost";
$username = "Ed-Free";
$password = "password@me";
$dbname = "edfree";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

	$query = 'SELECT * FROM videos WHERE id = ' .$id ;
	$query = 'SELECT * FROM videos WHERE id = ' .$id ;
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);   
	$videoID = $row["youtube-id"];
	//echo $videoID;
	//http://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg
	$remoteImage = "http://img.youtube.com/vi/".$videoID."/0.jpg";
	return $remoteImage;
}

function getVideo($id){
	$servername = "localhost";
$username = "Ed-Free";
$password = "password@me";
$dbname = "edfree";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
	$query = 'SELECT * FROM videos WHERE id = ' .$id ;
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);   
	$videoID = $row["id"];
	return $videoID;
}