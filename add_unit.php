<?php 
session_start();
if(!isset($_SESSION['user'])){
  echo '<script> window.location.assign("http://localhost/Rojo_sales/login_page.php")</script>';
  exit();
}
include('dbConnect.php');

if(isset($_POST['details'])){   

   $product= (array)json_decode($_POST['details']);
   //var_export($product_order);
   //echo json_encode($product);
   //echo $product['product_name'];
 // exit();

   // $product_name=$product['product_name'];    
    $product_unit=$product['unit'];
    //$product_rate=$product['rate'];
    
    $action=$product['action'];

    if($action==="add")
        {

                
    $sql = "INSERT INTO `product_unit` (`id`, `name`) VALUES (NULL,'$product_unit')";

    try{
        $status=$conn->query($sql);

        $last_id=$conn->insert_id;


      if($status){       
        echo json_encode(['message'=>'successfully sales','status_code'=>$status,'last_id'=>$last_id]);
      }


        
    }
    catch(Exception $e)
{
  echo $e; //We will catch ANY exception that the try block will throw

}
    

        }


        if($action==="update"){   

  $product= (array)json_decode($_POST['details']);
  

   $product_unit=$product['unit'];
   
    $product_id=$product['product_id'];

    $sql = "UPDATE `product_unit` set name='$product_unit' where id=$product_id";

    try{
        $status=$conn->query($sql);

        //$last_id=$conn->insert_id;
        echo json_encode(['message'=>'Updated successfully','status_code'=>$status]);
    }
    catch(Exception $e)
{
  $error=$e->getMessage(); //We will catch ANY exception that the try block will throw
  json_encode(['message'=>'Update fail','error_code'=>$error]);
}



}
}

if(isset($_POST['action'])){

if($_POST['action']==="delete"){
    $id=$_POST['id'];
    $sql="Delete from product_unit where id=$id";
    $status=$conn->query($sql);
    echo json_encode(['message'=>'Deleted successfully','status_code'=>$status]);
}



}




   
   



?>


