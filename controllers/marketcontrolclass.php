<?php
require_once('../includes/auth.php');
if ($_GET['action']="addmarket"){
		$marketname=$_POST['marketname'];
		$marketabbreviation=$_POST['marketabbreviation'];
		$no=numquery("SELECT id from markets where market ='$marketname'");
		if ($no>=1) {
			//remember to add pop up on redirect
			header("Location: ../markets/create_market.php#popuperror");
		}elseif ($no<=0) {
			querydb("INSERT INTO markets (market,mkt)VALUES('$marketname','$marketabbreviation')");
			header("Location: ../markets/view_market.php");

		}
		
		
	}
?>