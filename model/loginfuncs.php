<?php
function userIsLogged(){

if (isset($_SESSION['user_id'], $_SESSION['email'], $_SESSION['login_string'])) {

$user_id = $_SESSION['user_id'];

$login_string = $_SESSION['login_string'];

$email = $_SESSION['email']; 

$user_browser = $_SERVER['HTTP_USER_AGENT'];

$servername = "localhost";
$username = "Ed-Free";
$password = "password@me";
$dbname = "edfree";

$conn = new mysqli($servername, $username, $password, $dbname);

$check ="SELECT * FROM users WHERE uid = '$user_id' ";
$result = mysqli_query($conn, $check);
$row = mysqli_fetch_assoc($result); 
  
$user_id = $row["uid"]; $name = $row["name"]; $db_password = $row["password"];

$check ="SELECT password FROM users WHERE uid = '$user_id' ";

$pwd = mysqli_query($conn, $check);

$user_ip =  $_SERVER['REMOTE_ADDR'];

if ($pwd != null){ $login_check = hash('sha512', $db_password . $user_browser);
    if ($login_check == $login_string) { return true; } // Logged In!!!!				
		else { return false; } // Not logged in 
				 }
				 else { return false; } // Not logged in 
}
else { return false; } // Not logged in 

}



function loadAuth(){
	header("Location: /edfree/model/auth.php?try=success"); exit();
}