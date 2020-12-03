<?php 
include('dbConnect.php');

if(isset($_POST['details'])){   

   $product= (array)json_decode($_POST['details']);  

   $product_id=$product['product_id'];
   $quantity=$product['added_qty']; 
 

    $sql = "UPDATE `products_store` set quantity=quantity+$quantity where product_id=$product_id";

    try{
        $status=$conn->query($sql);

        //$last_id=$conn->insert_id;
        echo json_encode(['message'=>'Stock Updated successfully','status_code'=>$status]);
    }
    catch(Exception $e)
{
  $error=$e->getMessage(); //We will catch ANY exception that the try block will throw
  json_encode(['message'=>'Update fail','error_code'=>$error]);
}



}
   



?>


