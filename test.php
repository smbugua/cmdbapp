<?php
require_once('includes/auth.php');

$query="SELECT count(*) as marketcount from markets ";
 $count_markets=querydb($query);
 $result=$count_markets('marketcount');
    $result=mysqli_fetch_array($result1,MYSQLI_ASSOC);

echo $result;
