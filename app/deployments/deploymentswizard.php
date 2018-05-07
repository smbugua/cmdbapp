<?php 
include('../layout/nav.php');
if (!$_POST) {
	ob_start();
	header("Location : ../layouts/noentry.php");
	ob_end_flush();
}elseif ($_POST) {
$appid=$_POST['appid'];
	?>
	


<?php	
}
?>