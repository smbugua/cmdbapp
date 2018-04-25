<?php
include('mainclass.php');
$exec=new mainclass();
function get_markets(){
$count_markets=processquery("SELECT count(*) as marketcount from markets ");
$result=$count_markets['marketcount'];
return $result;
}
function get_envs(){

$count_envs=processquery("SELECT count(*) as env from markets_environments ");
$result=$count_envs['env'];
return $result;	
}
function get_apps(){
$count_apps=processquery("SELECT count(*) as app from apps");
$result=$count_apps['app'];
return $result;	
}
function get_nodes(){
$count_nodes=processquery("SELECT count(*) as c from nodes");
$result=$count_nodes['c'];
return $result;	
}
function get_users(){
$count_nodes=processquery("SELECT count(*) as c from users");
$result=$count_nodes['c'];
return $result;	
}

function env_count($id){
$count_apps=processquery("SELECT COUNT(me.id) as envs from markets_environments me inner join markets m on m.id=me.marketid ");
$result=$count_apps['envs'];
return $result;
}
function node_count($id){
$count_apps=processquery("SELECT count(n.id) as nodeid from nodes n inner join markets_environments me on me.id=n.market_environment_id inner join markets m on m.id=me.marketid ");
$result=$count_apps['nodeid'];
return $result;
}
function get_limit_markets(){
$count_nodes=querydb("SELECT id,market,mkt from  markets where status= 1 order by market asc limit 5 ");
$result=mysqli_fetch_array($count_nodes,MYSQLI_NUM);
return  array('market' => $result['market'] ,
				'mkt' => $result['mkt'],
				'id' => $result['id'] );
}
