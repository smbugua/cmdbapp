<?php
require_once('app/includes/auth.php');
if(isset($_SESSION['loggedin'])==true){
header("Location: app/access/logout");
}
elseif(isset($_SESSION['loggedin'])==false){
echo "<script>location.replace('app/access/index')</script>";
}


