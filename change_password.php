<?php session_start(); 

if(!isset($_SESSION['user'])){
    echo '<script> window.location.assign("http://localhost/Rojo_sales/login_page.php")</script>';
    exit();
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
    <title>Change Password</title>
</head>
<body>
    <style>
        .nav-link {
         color:  rgb(185, 39, 39)  !important;
         }
     </style>

     <?php include('navbar.php')?>

    <div class="container" style="clear:both;margin-top:10%">
        <div>
            <div class="card" style="width:70%;margin:0px auto">
                <div class="card-header">CHANGE PASSWORD</div>
                <div class="card-body form-group">
                    <label for="">Enter New Password</label>
                    <input type="text" name="new-password" id="new-password" placeholder="New password here..." class="form-control">
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-success float-right" id="update-button">Update password</a>
                </div>
              </div>
        </div>


        <div class="toast mt-5">    
            <div class="toast-body bg-success text-light">
                Password Updated Successfully
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#update-button').click(function(){
                ($('#new-password').val()!="") ? 
                             (updatePassword(),$('#new-password').val(""))  : 
                alert('Please type the new password and try again!')
                
            });
        });

        function updatePassword(){
            $.ajax({
                url:"http://localhost/Rojo_sales/update_password.php",
                method:"post",
                dataType:"json",
                data:{id:<?=$_SESSION['id']?>,
                    password:$('#new-password').val()
                },
                success:function(data){
                    $('.toast').toast({delay: 2000});
                    $('.toast').toast('show');
                    console.log(data);
                },
                error:function(xhr,status,error){
                    console.log(status,xhr);
                }

            });
        }
    </script>
</body>
</html>