<?php
include('../layout/nav.php');
$market=$_POST['market'];
$query=querydb("SELECT p.parameterid from market_environment_parameters where paramenterid not in (SELECT parameterid from market_environment_parameters where  marketid='$market') ");
$query2=querydb("SELECT p.name as pname ,p.value as pvalue from parameters php inner join market_environment_parameters me on me.paramterid=p.id where me.marketid='$market'");
?>

