<?php
 ob_start();
include('../layout/nav.php');
$r=processquery("SELECT ur.roleid from user_role inner join users where username='$user'");
if ($r=1) {
	exit(redirect("../admin/infrastructure.php"));
}elseif ($r=2) {
	exit(redirect("view_environment.php"));
}
 ob_end_flush();
?>
