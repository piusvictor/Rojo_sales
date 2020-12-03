<?php 

$product_order=[];

if(isset($_POST['details'])){
    //echo json_encode(['message'=>'successfully processed']);
   $product_order= (array)json_decode($_POST['details']);
   //var_export($product_order);
   echo json_encode($product_order);
    exit();
}

// $a=$_REQUEST['sales_details'];
// var_dump($a);


include('dbConnect.php');
/// CONNECTION CODES GO HERE (OR INCLUDE TO CONNECTION CODE PHP FILE)




/// Build Array
//$my_array = array("Joe", "Bloggs", "22, Letsby Avenue");

/// Serialize Array
//$my_array = serialize($my_array);

$product_order=serialize($product_order);

/// Add to MySQL database table
//$query = "INSERT INTO serialize_table  VALUES ($my_array)";
$sql = "INSERT INTO `serialize_table` (`id`, `member`) VALUES (NULL, '$product_order')";
    $status=$conn->query($sql);
    echo json_encode(['message'=>'successfully sales','status_code'=>$status]);
//echo json_encode($_POST);
    //var_dump($a);



?>


