<?php
/// CONNECTION CODES GO HERE
include('dbConnect.php');
$sql = "SELECT * FROM `products` INNER JOIN products_store ON products.id=products_store.product_id";

$snglQuery = $conn->query($sql);
//Fetch row
//$row = $snglQuery->fetch_assoc();

// Fetch all
$rows=$snglQuery-> fetch_all(MYSQLI_ASSOC);

$conn -> close();
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    <title>Data Table</title>
</head>
<body>
    <div class="container mt-5 pb-4">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Product_name</th>
                    <th>Unit</th>
                    <th>Available</th>
                    <th>Rate</th>
                    <th width="25%">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($rows as $key => $row) {?>
                  <tr>
                      <td><?=$key + 1?></td>
                      <td><?=$row['product_name']?></td>
                      <td><?=$row['unit']?></td>
                      <td><?=$row['quantity']?></td>
                      <td><?=$row['rate']?></td>
                      <td>
                                <a class="btn btn-primary btn-sm  edit-button" href="#" data-id="<?=$row['id']?>" >Edit</a>
                                <a class="btn btn-danger btn-sm delete-btn" href="#" data-id="<?=$row['id']?>">Delete</a>
                                <a class="btn btn-success btn-sm  stock-button" href="#" data-id="<?=$row['id']?>" >Update Stock</a>
                     </td> 
                  </tr>
             <?php }?>
            </tbody>
          
        </table>
    </div>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
           // getProducts();          
            
            $('#example').DataTable();
           
        } );
        


        //Retrieve Products
        function getProducts(){
            var output="";
            $.ajax({
                url:"retrieve_products.php",
                method:"GET",
                dataType:"json",
                success:function(data){
                    console.log(data);


                    data.forEach((item,index)=>{
                        output+=`
                            <tr>
                                <td>${index+1}</td> 
                                <td>${item.product_name}</td>
                                <td>${item.unit}</td>
                                <td>${item.quantity}</td>
                                <td>${item.rate}</td>                                                           
                                                                                        
                            </tr>                 
                    
                    `;
                    });
                   

                    $('tbody').html(output);
                },
                error:function(xhr, status,error){

                }
            });//End Ajax
        }

    </script>
</body>
</html>