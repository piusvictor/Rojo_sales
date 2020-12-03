<?php
/// CONNECTION CODES GO HERE
include('dbConnect.php');


//invoice_id_no

if(isset($_GET['id'])){
$id=$_GET['id'];
/// Retrieve array
$query = "SELECT CONCAT('R-PI-',LPAD(id,4,'0')) AS sale_invoice_no,proforma_details,created_At
FROM proforma_invoice
WHERE id = $id";

$snglQuery = $conn->query($query);
$row = $snglQuery->fetch_assoc();

$sale_no=$row["sale_invoice_no"];
$member = $row["proforma_details"];
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
exit();

}


$sql = "SELECT CONCAT('R-PI-',LPAD(id,4,'0')) AS sale_invoice_no,id,proforma_details,created_At
FROM proforma_invoice";

$snglQuery = $conn->query($sql);

// Fetch all
$rows=$snglQuery-> fetch_all(MYSQLI_ASSOC);

$conn -> close();
$items=[];

foreach ($rows as $row) {
    $items[] = unserialize($row['proforma_details']);
}
//$rows = unserialize($rows['sales_details']);
$sales_order=array([
    'sales'=>$items,
    'rows'=>$rows
]);

//print_r($sales_order);
echo json_encode($sales_order);

exit();
//invoice_id_no







?>