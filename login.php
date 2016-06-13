<?php
include 'core/init.php';

if (empty($_POST)===false){
	$username=$_POST['username'];
	$password=$_POST['password'];

	if (empty($username)=== true || empty($password) === true){
		$errors[]='enter username and password';

	} else if (user_exists($username)=== false){
		$errors[]='we cant find username.';
	}

}

?>