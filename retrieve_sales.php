<?php
/// CONNECTION CODES GO HERE
include('dbConnect.php');



if(isset($_GET['id'])){
    $id=$_GET['id'];
/// Retrieve array
$query = "SELECT CONCAT('R-INV-',LPAD(id,4,'0')) AS sale_invoice_no,sales_details,created_At
FROM sales_order
WHERE id = $id";

$snglQuery = $conn->query($query);
$row = $snglQuery->fetch_assoc();

$sale_no=$row["sale_invoice_no"];
$member = $row["sales_details"];
$date=date('d/m/Y', strtotime($row["created_At"]));
/// Retrieve array data and structure with unserialize()
$member = unserialize($member);

$response=['sales'=>$member,
            'date'=>$date,
            'sale_no'=>$sale_no
];


echo json_encode($response);

exit();

}


//SELECT * FROM `sales_order` WHERE created_At>= CURRENT_DATE and created_At<= concat(CURRENT_DATE,' 23:00:00')
//$sql = "SELECT * FROM `sales_order` WHERE created_At>= CURRENT_DATE and created_At<= concat(CURRENT_DATE,\' 23:00:00\')";
if(isset($_GET['dateFrom'])){

    $from=$_GET['dateFrom'];
    $to=$_GET['dateTo'];

    // echo $to;
    // exit();

    $sql = "SELECT CONCAT('R-INV-',LPAD(id,4,'0')) AS sale_invoice_no,id,sales_details,created_At
    FROM sales_order WHERE created_At >= concat('$from',' 00:00:00') and created_At <= concat('$to',' 23:00:00') order by created_At desc";
    
    $snglQuery = $conn->query($sql);
    
    // Fetch all
    $rows=$snglQuery-> fetch_all(MYSQLI_ASSOC);
    
    $conn -> close();
    $items=[];
    
    foreach ($rows as $row) {
        $items[] = unserialize($row['sales_details']);
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
    


}



$sql = "SELECT CONCAT('R-INV-',LPAD(id,4,'0')) AS sale_invoice_no,id,sales_details,created_At
FROM sales_order order by created_At desc";

$snglQuery = $conn->query($sql);

// Fetch all
$rows=$snglQuery-> fetch_all(MYSQLI_ASSOC);

$conn -> close();
$items=[];

foreach ($rows as $row) {
    $items[] = unserialize($row['sales_details']);
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