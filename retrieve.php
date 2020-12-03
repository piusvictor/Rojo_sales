<?php
/// CONNECTION CODES GO HERE
include('dbConnect.php');


//invoice_id_no


$id=$_GET['id'];
/// Retrieve array
$query = "SELECT member
FROM serialize_table
WHERE id = $id";

$snglQuery = $conn->query($query);
$row = $snglQuery->fetch_assoc();
$member = $row["member"];
/// Retrieve array data and structure with unserialize()
$member = unserialize($member);
//print_r($member);
//var_export($member);
//echo '<hr><br>';
echo json_encode($member);
// if(unserialized($member))  
// { echo "This is a serialized string."; } 
// else { echo "Nope, this is a normal array"; }


?>