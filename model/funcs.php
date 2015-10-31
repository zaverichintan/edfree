<?php

function  getThumb($id){
}

function getVideo($id){
	$servername = "localhost";
$username = "Ed-Free";
$password = "password@me";
$dbname = "edfree";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
	$query = "SELECT * FROM 'videos' WHERE 'video-id' = '$id'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);   
	$videoID = $row["id"];
	return $videoID;
}