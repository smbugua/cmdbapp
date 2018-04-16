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
	}