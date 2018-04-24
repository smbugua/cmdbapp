<?php
require_once('../includes/auth.php');
	//get signup action
	if ($_GET['action']=="signup") {
		# code...
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$hash=password_hash($password, PASSWORD_DEFAULT);
		querydb("INSERT INTO users (username,email,hashpassword)VALUES('$username','$email','$hash')");
		header("Location: ../access/index.php");
	}elseif ($_GET['action']=="signin") {
		$email=$_POST['email'];
		$password=$_POST['password'];
		$hash=password_hash($password, PASSWORD_DEFAULT);
		$u=querydb("SELECT email,username,id,hashpassword from users where email='$email' ");
		$isPasswordCorrect = password_verify($password, $hash);
		$userq=mysqli_fetch_array($u,MYSQLI_ASSOC);
		$no=numquery("SELECT email,username,id,hashpassword from users where email='$email'");
		if ($no>=1 && $isPasswordCorrect) {
		session_start();
		$_SESSION['user']=$userq['username'];
		$_SESSION['loggedin']="TRUE";
		header("Location: ../admin/index.php");			
		}elseif ($no<1) {
		//session_start();
			$_SESSION['loggedin']=FALSE;
			header("Location: ../access/index.php");
		}

	

	}