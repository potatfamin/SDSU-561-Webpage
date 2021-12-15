<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'AuRiOn!2#4%6&';
$dbname = 'transmitter';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn) {
	die('Could not Connect My Sql:' .mysql_error());
}

?>