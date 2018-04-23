<?php
require_once('../includes/dash_functions.php');
if ($_GET['action']=="addmarket"){
		$marketname=$_POST['marketname'];
		$marketabbreviation=$_POST['marketabbreviation'];
		$no=numquery("SELECT id from markets where market ='$marketname'");
		if ($no>=1) {
			header("Location: ../markets/create_market.php");
		}elseif ($no<=0) {
		
		$exec->addMarket($marketname,$marketabbreviation);
		header("Location: ../markets/view_market.php");

		}
		
		
	}elseif ($_GET['action']=="createenvironment") {
		$name=$_POST['name'];
		$environment=$_POST['environment'];
		$market=$_POST['market'];
		$exec->addMarketEnvironment($name,$market,$environment);
		header("Location: ../environments/view_market_environment.php");

	}

	elseif ($_GET['action']=="createnode") {
		$name=$_POST['name'];
		$ipaddress=$_POST['ipaddress'];
		$port=$_POST['port'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$market_environment_id=$_POST['market_environment_id'];
		$exec->addNode($market_environment_id,$name,$ipaddress,$port,$username,$password);
		header("Location: ../nodes/view_nodes.php");
	}

	elseif ($_GET['action']=="addApp") {
		$name=$_POST['name'];
		$exec->addApp($name);
		header("Location: ../apps/view_apps.php");

	}

	elseif ($_GET['action']=="addParameters") {
		$name=$_POST['names'];
		$exec->addParameter($name);
		header("Location: ../apps/view_parameters.php");

	}

	elseif ($_GET['action']=="edit") {
		$marketname=$_POST['marketname'];
		$marketabbreviation=$_POST['marketabbreviation'];
		$exec->edit($name);
		header("Location: ../markets/view_market.php");

	}

?>