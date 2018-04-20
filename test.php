<?php
require_once('includes/dash_functions.php');
$exe=new MainClass();
//$exe->addMarket('Tanzania','TZ');
$exe->updateTable('markets','mkt','TZ1','4');
$url='controllers/mainclass.php';
$action='addmarket';
$exe->executeForm($url,$action);