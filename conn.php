<?php

$dbhost = "localhost";
//$dbuserid = "";
$dbuser = "root";
$dbpass = "";
$dbname = "details";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
	die("Failed to connect!");
}


?>

