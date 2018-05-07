<?php
include('auth.php');
/**
* this class will house all functions to run all table inserts ,updates and deletions
*/
class MainClass
{
		//UpdateAnyTable
	function updateTable($table,$var,$input,$id){
		querydb("UPDATE `$table` SET `$var`='$input' WHERE  id = '$id' ");
	}

	//Add Market
	function addMarket($market,$mkt){
		querydb("INSERT into markets(market,mkt)values('$market','$mkt')");
	}


	//ADD ENVIRONEMNTS
	function addEnvironment($name,$description)
		{
		querydb("INSERT INTO environments (name,description)values('$name','$description')");
		}	

	
	//add market_environments
	function addMarketEnvironment($name,$marketid,$environmentid)
	{
		querydb("INSERT INTO markets_environments(name,marketid,environmentid)values('$name','$marketid','$environmentid')");
	}

	// desc apps
	function addApp($name)
	{
		querydb("INSERT INTO apps(name)VALUES('$name')");

	}

	//Add Nodes
	function  addNode($meid,$name,$ip,$port,$user,$pass){
		querydb("INSERT INTO nodes(market_environment_id,name,ipaddress,port,username,password)values('$meid','$name','$ip','$port','$user','$pass')");
	}
	//add market params
	function addMarketParameter($meid,$paramid,$paramvalue,$appid){
		querydb("INSERT INTO market_environment_parameters(marketenvironmentid,parameterid,parametervalue,appid)Values('$meid','$paramid','$paramvalue','$appid')");
	}

	//add parameters
	function addParameters($name){
		querydb("INSERT INTO (name)VALUES('$name')");
	}
	//
	function addUsers($name,$username,$email){
		querydb("INSERT INTO users(name,username,email,hashpassword)VALUES('$name','$username','$email','password')");
	}


	function addUserRole($userid,$roleid){
		querydb("INSERT INTO user_role(userid,roleid)VALUES('$userid','$roleid')");
	}
	function addVersion($nodeid,$appid,$versionname){
		querydb("INSERT INTO versions(nodeid,appid,versionname)VALUES('$nodeid','$appid','$versionname')");
	}
	function addDeployment($appid,$nodeid,$datedeployed,$fileid){
		querydb("INSERT into deployments(appid,nodeid,datedeployed,fileid)VALUES('$appid','$nodeid','$datedeployed','$fileid')");
	}

	function addRole($name){
		querydb("INSERT INTO roles(name)values('$name')");
	}

	function editObject($action,$id){
		echo("../controllers/updatecontroller.php?action=$action&&id=$id");
	}
	function editClass($object,$id){
		echo ("edit$object.php?id=$id");
	}
	function capturePost(){
		
	}
}