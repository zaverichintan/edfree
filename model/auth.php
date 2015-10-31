<?php
session_start();
require_once('../model/loginfuncs.php');
if(!userIsLogged()){
header('Location: ../view_con/login.php');exit();
}else{

	header('Location: ../index.php');exit();
	//header('Location: ../user/dashboard.php');

}





?>