<?php
/// CONNECTION CODES GO HERE
include('dbConnect.php');


//invoice_id_no


$id=$_GET['id'];
/// Retrieve array
$query = "SELECT CONCAT('R-PO-',LPAD(id,4,'0')) AS sale_invoice_no,purchase_details,created_At
FROM purchase_order
WHERE id = $id";

$snglQuery = $conn->query($query);
$row = $snglQuery->fetch_assoc();

$sale_no=$row["sale_invoice_no"];
$member = $row["purchase_details"];
$date=date('d/m/Y', strtotime($row["created_At"]));
/// Retrieve array data and structure with unserialize()
$member = unserialize($member);

$response=['sales'=>$member,
            'date'=>$date,
            'sale_no'=>$sale_no
];
//print_r($member);
//var_export($member);
//echo '<hr><br>';
//echo json_encode($member);

echo json_encode($response);

// if(unserialized($member))  
// { echo "This is a serialized string."; } 
// else { echo "Nope, this is a normal array"; }


?>