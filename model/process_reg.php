<?php
if(isset($_POST['register'])&&isset($_POST['Name'])&&isset($_POST['Email'])&&isset($_POST['Pass'])&&isset($_POST['Rpass'])){
	require_once('db-config.php');

$_POST['fname']= ucfirst(strtolower($_POST['Name']));

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

$name = test_input($_POST['Name']);

$email = test_input($_POST['Email']);

//create a salt
$characters = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789!@#$%^&*()_-+=|\}{[]<>?';
$string = '';
for ($i = 0; $i < 20; $i++) {
      $string .= $characters[rand(0, strlen($characters) - 1)];
 }
$salt=$string;

$password = $_POST['Pass'];



if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $err = "Only letters and white space allowed in Name"; 
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $err = "Invalid email format"; 
}

$check = "SELECT email FROM users WHERE email = '$email'";
$check = mysqli_query($conn, $check);
$check2 = mysqli_num_rows($check);
if($check2 != 0){ 
        $err = "Sorry, the Email is already in use."; 
	}


if($err==null){

$mix = $password.$salt;
$password = hash('ripemd160', $mix);

$stmt = $conn->prepare("INSERT INTO users (Name, email, password, salt ) VALUES (?, ?, ?, ?)");

$stmt->bind_param("ssss", $name,$email,$password, $salt);
$stmt->execute();
$stmt->close();
}


}else{
	$err = 'Fill in all details';
}


?>