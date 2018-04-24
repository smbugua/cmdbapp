<?php
require_once('controllers/usercontrolclass.php');

$exe=new MainClass();if(!$mail->send()) 
			{
			    echo "Mailer Error: " . $mail->ErrorInfo;
			} 
			else 
			{
			    echo "Message has been sent successfully";
			}
			