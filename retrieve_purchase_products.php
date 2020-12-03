<?php
/// CONNECTION CODES GO HERE
include('dbConnect.php');

if(isset($_POST['id'])){
    $id=$_POST['id'];
    //echo $id;
    $sql = "SELECT * FROM `purchase_products` where id=$id";

    $snglQuery = $conn->query($sql);

//Fetch row
    $row = $snglQuery->fetch_assoc();

    echo json_encode($row);
    exit();
}




/// Retrieve array
$query1 = "SELECT *
FROM products";

$sql = "SELECT * FROM `purchase_products`";

$snglQuery = $conn->query($sql);

//Fetch row
//$row = $snglQuery->fetch_assoc();


// Fetch all
$rows=$snglQuery-> fetch_all(MYSQLI_ASSOC);

$conn -> close();



// $response=['sales'=>$member,
//             'date'=>$date,
//             'sale_no'=>$sale_no
// ];


echo json_encode($rows);



?>