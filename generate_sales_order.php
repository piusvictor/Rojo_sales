<?php 

$product_order=[];
$client_phone="";
$client_address="";
$client_location="";
$proforma_id=0;
$sql="";


if(isset($_POST['details'])){
    //echo json_encode(['message'=>'successfully processed']);
   $product_order= (array)json_decode($_POST['details']);
   //var_export($product_order);
  // echo json_encode($product_order);
    //exit();
}

// $a=$_REQUEST['sales_details'];
// var_dump($a);


include('dbConnect.php');
/// CONNECTION CODES GO HERE (OR INCLUDE TO CONNECTION CODE PHP FILE)




/// Build Array
//$my_array = array("Joe", "Bloggs", "22, Letsby Avenue");

/// Serialize Array
//$my_array = serialize($my_array);

$customer_name=$product_order["client"]->name;
$client_address=$product_order["client"]->address;
$client_location=$product_order["client"]->location;
$p_qty=$product_order["quantity"];
$p_id=$product_order["item_id"];


//print_r($p_id);

//var_dump($customer_name->name);
//exit();

foreach ($product_order["item_details"] as $key => $value) {
    $sql1 = "UPDATE `products_store` set quantity=quantity-$p_qty[$key] where product_id=$p_id[$key]";
    $status1=$conn->query($sql1);
}



$product_order=serialize($product_order);

/// Add to MySQL database table
//$query = "INSERT INTO serialize_table  VALUES ($my_array)";
// if(isset($_GET['id'])){
//     $proforma_id=$_GET['id'];
//     $sql = "INSERT INTO `sales_order` (`id`, `customer_name`,`street`,`location`,`sales_invoice`,`proforma_id`) VALUES (NULL, '$customer_name','$street','$location','$product_order',$proforma_id)";
// }

    //$sql = "INSERT INTO `sales_order` VALUES ('customer_name','client_address','client_location','product_order')";
   // $sql = "INSERT INTO `sales_order` (`id`, `customer_name`, `street`, `location`, `sales_details`, `proforma_id`, `created_At`) VALUES (NULL, 'pius', 'mbezi', 'luis', 'gkghgkh', 0, CURRENT_TIMESTAMP)";
   $sql = "INSERT INTO `sales_order` (`id`, `customer_name`, `street`, `location`, `sales_details`, `proforma_id`, `created_At`) VALUES (NULL, '$customer_name', '$client_address', '$client_location', '$product_order', 0, CURRENT_TIMESTAMP)";

    try{
        $status=$conn->query($sql);

        $last_id=$conn->insert_id;
        echo json_encode(['message'=>'successfully sales','status_code'=>$status,'last_id'=>$last_id]);
    }
    catch(Exception $e)
{
  echo $e;//We will catch ANY exception that the try block will throw

}
    
//echo json_encode($_POST);
    //var_dump($a);



?>


