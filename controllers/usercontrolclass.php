<?php
require_once('../includes/auth.php');
	//get signup action
	if ($_GET['action']=="signup") {
		# code...
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		querydb("INSERT INTO users (username,email,hashpassword)VALUES('$username','$email','$password')");
		header("Location: ../access/index.php");
	}elseif ($_GET['action']=="signin") {
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$userq=processquery("SELECT email,username,id,hashpassword from users where email='$email' and hashpassword='$password' ");
		if (processquery("SELECT email,username,id,hashpassword from users where email='$email' and hashpassword='$password' ")) {
		session_start();
		$_SESSION['user']=$userq['username'];
		$_SESSION['loggedin']=TRUE;
		header("Location: ../admin/index.php");			
		}elseif (!processquery("SELECT email,username,id,hashpassword from users where email='$email' and hashpassword='$password' ")) {
		//session_start();
			$_SESSION['loggedin']=FALSE;
			header("Location: ../access/index.php");
		}

		

	}