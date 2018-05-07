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
else if ($_GET['action']=="editnode") {
	$name=$_POST['name'];
	$ipaddress=$_POST['ipaddress'];
	$port=$_POST['port'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$market_environment_id=$_POST['market_environment_id'];
	$market=$_POST['market'];
	$id=$_REQUEST['id'];
	$exec->updateTable('markets','name',$name,$id);
	$exec->updateTable('markets','ipaddress',$ipaddress,$id);
	$exec->updateTable('markets','port',$port,$id);
	$exec->updateTable('markets','username',$username,$id);
	$exec->updateTable('markets','password',$password,$id);
	$exec->updateTable('markets','market_environment_id',$market_environment_id,$id);
	$exec->updateTable('markets','market',$market,$id);
	header("Location: ../nodes/view_nodes.php");
}
else if ($_GET['action']=="editmarketenvironment") {
	$name=$_POST['name'];
	$environment=$_POST['environment'];
	$market=$_POST['market'];
	$id=$_REQUEST['id'];
	$exec->updateTable('markets_environments','name',$name,$id);
	$exec->updateTable('markets_environments','marketid',$environment,$id);
	$exec->updateTable('markets_environments','environmentid',$market,$id);
	header("Location: ../nodes/view_nodes.php");
}

else if ($_GET['action']=="editapps") {
	$name=$_POST['name'];
	$id=$_REQUEST['id'];
	$exec->updateTable('apps','name',$name,$id);
	header("Location: ../apps/view_apps.php");
}

else if ($_GET['action']=="edituserRole") {

	$role=$_POST['role'];
	$id=$_REQUEST['id'];
	$q=processquery("SELECT id from user_role where userid='$id'");
	$urid=$q['id'];
	$exec->updateTable('user_role','roleid',$role,$urid);
	header("Location: ../admin/view_users.php");
}

else if ($_GET['action']=="editmarketparameters") {
	$parameterid=$_POST['parameterid'];
	$parametervalue=$_POST['parametervalue'];
	$id=$_REQUEST['id'];
	$market=$_REQUEST['market'];
	$exec->updateTable('market_environment_parameters','parameterid',$parameterid,$id);
	$exec->updateTable('market_environment_parameters','parametervalue',$parametervalue,$id);
	header("Location: ../mkt_environment_parameters/market_parameters.php?market=$market");
}

else if ($_GET['action']=="deactivatemarket") {
	$id=$_REQUEST['id'];
	$exec->updateTable('markets','status','1',$id);
	header("Location: ../markets/view_market.php");
}

else if ($_GET['action']=="deactivatenode") {
	$id=$_REQUEST['id'];
	$exec->updateTable('nodes','status','1',$id);
	header("Location: ../nodes/view_nodes.php");
}

else if ($_GET['action']=="deactivateuser") {
	$id=$_REQUEST['id'];
	$exec->updateTable('users','status','1',$id);
	header("Location: ../admin/view_users.php");
}

else if ($_GET['action']=="activatemarket") {
	$id=$_REQUEST['id'];
	$exec->updateTable('markets','status','0',$id);
	header("Location: ../markets/view_market.php");
}

else if ($_GET['action']=="activatenode") {
	$id=$_REQUEST['id'];
	$exec->updateTable('nodes','status','0',$id);
	header("Location: ../nodes/view_nodes.php");
}

else if ($_GET['action']=="activateuser") {
	$id=$_REQUEST['id'];
	$exec->updateTable('users','status','0',$id);
	header("Location: ../admin/view_users.php");
}


ob_clean() ;
ob_end_clean();	

