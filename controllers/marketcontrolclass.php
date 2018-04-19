<?php
require_once('../includes/dash_functions.php');
if ($_GET['action']="addmarket"){
		$marketname=$_POST['marketname'];
		$marketabbreviation=$_POST['marketabbreviation'];
		$no=numquery("SELECT id from markets where market ='$marketname'");
		if ($no>=1) {
			header("Location: ../markets/create_market.php");
		}elseif ($no<=0) {
		
		$exec->addMarket($marketname,$marketabbreviation);
		header("Location: ../markets/view_market.php");

		}
		
		
	}elseif ($_GET['action']=) {
		# code...
	}
?>