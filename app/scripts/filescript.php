<?php
include('../includes/auth.php');
$marketenvid=$_GET['marketenvid'];


$appid=$_GET['appid'];
if ($appid=1 || $appid=3) {
	$prefix="lending";
}elseif ($appid=2) {
	$prefix="recovery";
}elseif ($appid=4) {
	$prefix="cdrparser";
}
$fp1 = fopen( '../../markets/KE/KE-TEST/AS/'.$prefix.'.config', 'w' );

$outPut = ";Parametername\tParametervalue\n";

//retrive records from database and write to file
$result = querydb("SELECT p.name as parametername , mep.parametervalue as parametervalue FROM market_environment_parameters mep inner join parameters p on p.id=mep.parameterid where mep.marketenvironmentid='$marketenvid' and mep.appid='$appid' ");
while($row = mysqli_fetch_array($result))
{
 $outPut .= $row['parametername']."=".$row['parametervalue']."\n";

} 
fwrite( $fp1,$outPut);
fclose( $fp1 );
?>