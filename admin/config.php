<?php
$host = "localhost";
$user = "root";

//biarkan password kosong
$password = ""; 
$database="deploy";
// Create connection
$samb = mysqli_connect($host, $user, $password, $database);


// Check connection
if (!$samb) {
	echo "Connection failed!";
}
?>