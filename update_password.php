<?php
/// CONNECTION CODES GO HERE
include('dbConnect.php');

if(isset($_POST['id'])){
    $id=$_POST['id'];
    $password=$_POST['password'];

    $sql = "UPDATE `system_users` set password=md5($password) where id=$id";

    try{
        $status=$conn->query($sql);        
        echo json_encode(['message'=>'Updated successfully','status_code'=>$status]);
    }
    catch(Exception $e)
{
  $error=$e->getMessage(); //We will catch ANY exception that the try block will throw
  json_encode(['message'=>'Update fail','error_code'=>$error]);
}



}


?>