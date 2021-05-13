<?php
$dbhost = 'mysql.db.mdbgo.com';
$dbUsername ='zlats_beezho';
$dbPassword ='A#ard123';
$dbName = 'zlats_pfe';

$db = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

if ($db->connect_error) {
	die("connectio failed: " . $db->connect_error);
}
 ?>