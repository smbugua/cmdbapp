<?php
require_once('../includes/dash_functions.php');
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
}elseif ($_GET['action']=="adduser") {
			$username=$_POST['username'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$roleid=$_POST['roles'];
			$exec->addUsers($name,$username,$email);
			$lastid=lastid();
			$exec->addUserRole($lastid,$roleid);
			header("Location: ../admin/view_users.php");			
			//SEND MAIL 
			$subject  = 'Activating CMDB';
			$message  = 'Hi'. $name.'Activate your CMDB account by clicking on this link. http://localhost/cmdb/access/setpassword.php?token= ';
			$headers  = 'From: maryemm18@gmail.com' . "\r\n" .
			            'MIME-Version: 1.0' . "\r\n" .
			            'Content-type: text/html; charset=utf-8';
			if(mail($email, $subject, $message, $headers))
			    echo "Email sent";
			else
			    echo "Email sending failed";
		}

	

	