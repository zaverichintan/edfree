<?php
if(isset($_POST['register'])&&isset($_POST['Name'])&&isset($_POST['Email'])&&isset($_POST['Pass'])&&isset($_POST['Rpass'])){

$_POST['fname']= ucfirst(strtolower($_POST['Name']));

$fname = test_input($_POST['Name']);

$email = test_input($_POST['Email']);

//create a salt
$characters = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789!@#$%^&*()_-+=|\}{[]<>?';
$string = '';
for ($i = 0; $i < 20; $i++) {
      $string .= $characters[rand(0, strlen($characters) - 1)];
 }
$salt=$string;

$password =$_POST['Pass'];



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


}else{
	$err = 'Fill in all details';
}


?>