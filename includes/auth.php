<?php // rnfunctions.php
//error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors',1);
$dbhost = 'localhost'; // Unlikely to require changing
$dbname = 'cmdb'; // Modify these...
$dbuser = 'root'; // ...variables according
$dbpass = ''; // ...to your installation

$GLOBALS['con']=mysqli_connect("localhost","root","","cmdb");

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
    exit;
}
function numquery($query)
{
    
    $result1=querydb($query);
    $result=mysqli_num_rows($result1);
    return $result;
    
}
function lastid(){
    $con=$GLOBALS['con'];
    $id=mysqli_insert_id($con);
    return $id;
}
function longdate($timestamp)
{
return date("l F jS Y", $timestamp);
}
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}


?>
