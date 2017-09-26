<?php


$db_host = 'localhost';
$db_user = 'root';
$db_pwd ='';
$db = 'srs';
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
$con = mysql_connect($db_host,$db_user,$db_pwd);

if(!$con)
{
die('Could Not Connect !'.mysql_error());
}


mysql_select_db($db, $con);

?>
