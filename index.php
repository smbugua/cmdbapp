<?php
require_once('includes/auth.php');
session_start();
if(isset($_SESSION['loggedin'])==true){
	header("Location: ../access/validator.php");
}
elseif(isset($_SESSION['loggedin'])==false){
echo "<script>location.replace('access/index.php')</script>";
}
