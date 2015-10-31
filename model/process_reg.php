<?php
if(isset($_POST['register'])&&isset($_POST['Name'])&&isset($_POST['Email'])&&isset($_POST['Pass'])&&isset($_POST['Rpass'])){
	require_once()

$_POST['fname']= ucfirst(strtolower($_POST['Name']));

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



if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
  $err = "Only letters and white space allowed in Name"; 
}
if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
  $err = "Only letters and white space allowed in Name"; 
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $err = "Invalid email format"; 
}

if (!preg_match("/^[0-9]*$/",$phno)) {
  $err = "Invalid Mobile No."; 
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

$stmt->bind_param("sssss", $name,$email,$password, $salt);
$stmt->execute();
$stmt->close();
}


}else{
	$err = 'Fill in all details';
}


?>