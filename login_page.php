<?php
session_start();
include('dbConnect.php');

$username="";
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql = "SELECT * FROM `system_users` where username='$username' && password=md5('$password')";

    $result = $conn->query($sql);

    $rows_returned=$result->num_rows;
    

    if($rows_returned>0){
        $row=$result->fetch_assoc();
        $_SESSION['user']=$username;
        $_SESSION['id']=$row['id'];   
        $_SESSION['role']=$row['role'];   
       
        echo '<script> window.location.assign("http://localhost/Rojo_sales/sales.php")</script>';
        }
    else {        
        echo '<script>alert("Invalid Username or Password")</script>'; 
        echo '<script> window.location.assign("http://localhost/Rojo_sales/login_page.php")</script>';
    }
         

    

    
    
    
    
    
    //Todo codes
   //echo '<script>alert("Hello Login page")</script>';

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/sales.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Login Page</title>
</head>
<style>
*{
        margin: 0px;
        padding:0px;
}
.container-height{
   height:100vh;
    background-image: linear-gradient(to bottom , rgb(165, 12, 12) 50%, rgb(213, 213, 221) 50%);
    position: relative;
}
body{
    background-color: rgb(213, 213, 221);
}
.login-box{
    height:500px;
    width:400px;
    background-color: rgb(255, 255, 255);    
    position:absolute;
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);
    
}
.heading{
    margin: 10px;
    padding:10px;
    display: flex;
    justify-content: center;
    margin-top: -20px;
    font-weight: 700;
}

.logo{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 150px;
}
</style>
<body>

    <div class="container-fluid container-height">
        <div class="login-box shadow">
            <div class="logo">
                <img src="./images/rojo_logo.png" alt="rojo_logo" width="200px" height="85px">
            </div>
            <div class="heading">
                <h5 class="text-center text-danger font-weight-bold">SignIn</h5>                
            </div>
            <hr width="80%" style="margin: auto;">
            <div class="container form-group mt-3">
                <form action="" method="post">

                    <label for="" ><b>Username:</b></label>
                    <input type="text" class="form-control" name="username">
    
                    <label for=""><b>Password:</b></label>
                    <input type="password" class="form-control" name="password">

                    <button type="submit" name="login" class="btn btn-danger form-control mt-5">LOGIN</button>

                    <div for="" class="mt-4 text-center text-secondary" style="font-size: 14px;">This sales system is  &copy; copyrighted to Rojo Africa.  </div>
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>