<?php

// CONNECT TO DATABASE
$hostname="localhost"; // specify host, i.e. 'localhost'
$user="root"; // specify username
$pass=""; // specify password
$dbase="serialize_data"; // specify database name
$conn = new mysqli($hostname, $user, $pass, $dbase);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

?>