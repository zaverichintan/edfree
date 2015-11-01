<?php

if(isset($_GET['term'])){
	function test_input($data) {
$servername = "localhost";
$username = "Ed-Free";
$password = "password@me";
$dbname = "edfree";
$conn = new mysqli($servername, $username, $password, $dbname);

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($conn,$data);
  $data = strip_tags($data);
  return $data;
}
	$searchTerm = test_input($_GET['term']);
	

}


?>