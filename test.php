<?php
require_once('includes/auth.php');
function get_limit_markets(){
    $count_nodes=querydb("SELECT id,market,mkt 
                           from  markets 
                           where status= 1 
                           order by market asc 
                           limit 5 ");

    return mysqli_fetch_all($count_nodes,MYSQLI_ASSOC);
}

$res=get_limit_markets();
print_r($res['id']);