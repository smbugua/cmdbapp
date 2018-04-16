<?php
require_once('includes/auth.php');
$rows=processquery("select * from users");
echo $rows['username'];