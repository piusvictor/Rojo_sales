<?php 

$product_order=[];
$client_phone="";
$client_address="";
$client_location="";
$proforma_id=0;
$sql="";


if(isset($_POST['delivery'])){
    //echo json_encode(['message'=>'successfully processed']);
   $product_order= (array)json_decode($_POST['delivery']);
   //var_export($product_order);
   //echo json_encode($product_order);
   // exit();
}

// $a=$_REQUEST['sales_details'];
// var_dump($a);


include('dbConnect.php');
/// CONNECTION CODES GO HERE (OR INCLUDE TO CONNECTION CODE PHP FILE)




/// Build Array
//$my_array = array("Joe", "Bloggs", "22, Letsby Avenue");

/// Serialize Array
//$my_array = serialize($my_array);

$delivery_no=$product_order["salesno"];


//var_dump($customer_name->name);
//exit();

$product_order=serialize($product_order);

/// Add to MySQL database table
//$query = "INSERT INTO serialize_table  VALUES ($my_array)";
// if(isset($_GET['id'])){
//     $proforma_id=$_GET['id'];
//     $sql = "INSERT INTO `sales_order` (`id`, `customer_name`,`street`,`location`,`sales_invoice`,`proforma_id`) VALUES (NULL, '$customer_name','$street','$location','$product_order',$proforma_id)";
// }

    //$sql = "INSERT INTO `sales_order` VALUES ('customer_name','client_address','client_location','product_order')";
   // $sql = "INSERT INTO `sales_order` (`id`, `customer_name`, `street`, `location`, `sales_details`, `proforma_id`, `created_At`) VALUES (NULL, 'pius', 'mbezi', 'luis', 'gkghgkh', 0, CURRENT_TIMESTAMP)";
   $sql = "INSERT INTO `delivery_order` (`id`, `delivery_no`,`delivery_details`, `created_at`) VALUES (NULL,'$delivery_no','$product_order',CURRENT_TIMESTAMP)";

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


