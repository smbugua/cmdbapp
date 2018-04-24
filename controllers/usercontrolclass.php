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
	}elseif ($_GET['action']=="adduser") {
			$username=$_POST['username'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$roleid=$_POST['id'];
			$exec->addUsers($name,$username,$email);
			$lastid=lastid();
			$exec->addUserRole($lastid,$roleid);
			header("Location: ../admin/view_users.php");			
			//SEND MAIL 
			$mail = new PHPMailer;

			//Enable SMTP debugging. 
			$mail->SMTPDebug = 3;                               
			//Set PHPMailer to use SMTP.
			$mail->isSMTP();            
			//Set SMTP host name                          
			$mail->Host = "smtp.gmail.com";
			//Set this to true if SMTP host requires authentication to send email
			$mail->SMTPAuth = true;                          
			//Provide username and password     
			$mail->Username = "maryemm18@gmail.com";                 
			$mail->Password = "hotboybill09";                           
			//If SMTP requires TLS encryption then set it
			$mail->SMTPSecure = "tls";                           
			//Set TCP port to connect to 
			$mail->Port = 587;                                   

			$mail->From = "maryemm18@gmail.com";
			$mail->FromName = "Mary Mueni";

			$mail->addAddress($email, $name);

			$mail->isHTML(true);

			$mail->Subject = "Subject Text";
			$mail->Body = "<i>Mail body in HTML</i>";
			$mail->AltBody = "This is the plain text version of the email content";

			if(!$mail->send()) 
			{
			    echo "Mailer Error: " . $mail->ErrorInfo;
			} 
			else 
			{
			    echo "Message has been sent successfully";
			}
		}

	

	}