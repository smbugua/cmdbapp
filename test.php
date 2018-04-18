<?php
require_once('includes/auth.php');
$rows=processquery("select * from markets");
echo $rows['market'];