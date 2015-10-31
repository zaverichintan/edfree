<?php
if(isset($_POST['login'])&&isset($_POST['Email'])&&isset($_POST['Pass'])){
	require_once('db-config.php');

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

$email = test_input($_POST['Email']);

$check = "SELECT email FROM users WHERE email = '$email'";
$check = mysqli_query($conn, $check);
$check2 = mysqli_num_rows($check);
if($check2 == 0){ 
        $err = "This Email does not exists is our database"; 
	}


if($err==null){
	$check ="SELECT uid,Name,email,password,salt FROM users WHERE email = ?";

	$stmt = $conn->stmt_init();
	$stmt->prepare($check);
	$stmt->bind_param("s", $email);

	$stmt->execute();

	$stmt->bind_result($user_id, $name, $mail, $db_password, $salt);
	$row = $stmt->fetch();
	$mix = $_POST['Pass'].$salt;
	$enteredPass = hash('ripemd160', $mix);

	if ($db_password == $enteredPass) {
                    // Password is correct!
                    // Get the user-agent string of the user.
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    $ip =  $_SERVER['REMOTE_ADDR'];
		    		$email_id = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $email);
                    $user_id = preg_replace("/[^0-9]+/", "", $user_id);
					
					$_SESSION['user_id'] = $user_id ;
					$_SESSION['login_string'] = hash('sha512', $password . $user_browser . $ip);
					$_SESSION['email'] = $mail; 
					$_SESSION['user_id'];
					$_SESSION['email'];
					$_SESSION['login_string'];


					header("Location: auth.php?try=success"); exit();


}else{
	$err = 'Incorrect Credentials';
}

}else{
	$err='Fill in all details';
}