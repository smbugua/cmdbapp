<?php // logout.php
include_once '../includes/auth.php';
if (isset($_SESSION['user']))
{
destroySession();
header("Location: ../access/index.php");
}
else 
{
header("Location: ../access/index.php");
}
?>