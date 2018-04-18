<?php
require_once('includes/auth.php');
function get_limit_markets(){
$count_nodes=querydb("SELECT id,market,mkt from  markets where status= 1 order by market asc limit 5 ");
$result=mysqli_fetch_array($count_nodes,MYSQLI_ASSOC);
return  array('market' => $result['market'] ,
				'mkt' => $result['mkt'],
				'id' => $result['id'] 
			);
}


$res=get_limit_markets();
extract($res);
