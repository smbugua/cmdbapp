<?php // rnfunctions.php
error_reporting(E_ALL ^ E_DEPRECATED);
$dbhost = 'localhost'; // Unlikely to require changing
$dbname = 'cmdb'; // Modify these...
$dbuser = 'root'; // ...variables according
$dbpass = ''; // ...to your installation
mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
$GLOBALS['con']=mysqli_connect("localhost","root","","cmdb");

mysql_select_db($dbname) or die(mysql_error());
function sessionStart()
{
session_start();
}

function querydb($query){
$con=$GLOBALS['con'];
$result = mysqli_query($con,$query);
return $result;

}
function destroySession()
{
$_SESSION=array();
if (session_id() != "" || isset($_COOKIE[session_name()]))
setcookie(session_name(), '', time()-2592000, '/');
session_destroy();
}
function sanitizeString($var)
{
$con=$GLOBALS['con'];
$var = strip_tags($var);
$var = htmlentities($var);
$var = stripslashes($var);
$newvar=$con->real_escape_string($var);
}


function processquery($query)
{
    
    $result1=querydb($query);
    $result=mysqli_fetch_array($result1,MYSQLI_ASSOC);
    return $result;
    
}

function longdate($timestamp)
{
return date("l F jS Y", $timestamp);
}
?>
