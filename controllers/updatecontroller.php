<?php
ob_start();
include('../layout/nav.php');
if ($_GET['action']=="editmarket") {
	$market=$_POST['market'];
	$mkt=$_POST['mkt'];
	$id=$_REQUEST['id'];
	$exec->updateTable('markets','market',$market,$id);
	$exec->updateTable('markets','mkt',$mkt,$id);
	header("Location: ../markets/view_market.php");
}
ob_clean() ;
ob_end_clean();	
