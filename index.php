<?php
require_once('includes/auth.php');
destroysession();
session_start();
if(isset($_SESSION['loggedin'])==true){
	header("Location: access/logout.php");
}
elseif(isset($_SESSION['loggedin'])==false){
echo "<script>location.replace('access/index.php')</script>";
}
