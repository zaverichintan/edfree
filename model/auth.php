<?php
require_once('../model/loginfuncs.php');
if(userIsLogged()==false){
header('Location: ../view_con/login.php');exit();
}else{

	header('Location: ../index.php');
	//header('Location: ../user/dashboard.php');

}





?>