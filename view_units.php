<?php
/// CONNECTION CODES GO HERE
include('dbConnect.php');
$sql = "SELECT * FROM `product_unit`";

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
    

    <title>View products</title>

</head>
<style>
   .nav-link {
    color:  rgb(185, 39, 39)  !important;
    }
</style>
<body>
<?php include('navbar.php')?>
    <div class="container" style="clear:both;margin-top:10%">
    <div>
    <a href="#" class="btn btn-info btn-sm mb-4 mr-2" data-toggle="modal" data-target="#add-product-modal">Add New Unit</a>    
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Unit_name</th>            
                    
                    <th width="25%">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $key => $row) {?>
                  <tr>
                      <td><?=$key + 1?></td>
                      <td><?=$row['name']?></td>
                      
                      <td>
                                <a class="btn btn-primary btn-sm  edit-button" href="#" data-id="<?=$row['id']?>" >Edit</a>
                                <a class="btn btn-danger btn-sm delete-btn" href="#" data-id="<?=$row['id']?>">Delete</a>                               
                     </td> 
                  </tr>
             <?php }?>
            </tbody>
            <!-- <tfoot>
        
            </tfoot> -->
        </table>

    </div>



        <!-- The Add Product Modal -->
    <div class="modal" id="add-product-modal">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Add Unit</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body form-group">
            
            <form action="" method="get">                
            <label for="">Product Unit:</label>
            <input type="text" name="product-unit" id="product-unit" placeholder="Product Unit here.." class="form-control">          
            
            </form>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="add-product">Save</button>
        </div>

        </div>
    </div>
    </div>




     <!-- The Add Product Modal -->
     <div class="modal" id="update-product-stock-modal">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Update Product Unit</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body form-group">
            
            <form action="" method="get">
            
            <label for="">Product Unit:</label>
            <input type="text" name="stock-name" id="stock-name"  class="form-control" readonly>        
           
            <input type="hidden" name="stock-id" id="stock-id">
            
            </form>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="update-stock">Update Stock</button>
        </div>

        </div>
    </div>
    </div>















 <!-- Edit Product Modal -->
 <div class="modal" id="edit-unit">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Unit</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body form-group">
      <form action="" method="get">
        
        <label for="">Id no:</label>
        <input type="text" name="product-id" id="edit-product-id"  class="form-control" style="width:20%" readonly>

        <label for="">Product Unit:</label>
        <input type="text" name="product-unit" id="edit-product-unit" placeholder="Product Unit here.." class="form-control">
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success ml-3" id="update">update</button>
      </div>

    </div>
  </div>
</div>







    


    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>




    <script>



       

        $(document).ready(function(){           
           // getProducts();
           // $('#my-table').DataTable();
            //A call to add product modal

            //A call for edit
            $(document).on('click','.edit-button',function(){
                var id =$(this).data('id');                
                editProduct(id);


            });


            $(document).on('click','.stock-button',function(){
                var id =$(this).data('id');                
                editStock(id);


            });


            $('#update-stock').click(function(){                
                var product_id=$('#stock-id').val();                
                var product_qty=$('#stock-qty').val();                
                updateStock(product_id,product_qty);
            });

           
            
            //


            $('#add-product').click(function(){      
                
                var product_unit=$('#product-unit').val();
                
                addProduct(product_unit);
            });

            $('#update').click(function(){     
                var unit_id=$('#edit-product-id').val();           
                var product_name=$('#edit-product-unit').val();
                
                updateProduct(product_name,unit_id);
            });

            
            
            $(document).on('click','.delete-btn',function(){
                var id =$(this).data('id'); 
                
                if(confirm('Are sure you want to delete this product?')){
                    deleteProduct(id);
                }
                

            });
            //

        });


        $(document).ready(function() {
            $('#example').DataTable();
        } );



        //Add products
        function addProduct(unit){
            var product_details={                
                unit:unit,                
                action:"add"
            }

            var details=JSON.stringify(product_details);
            //var details=product_details;
            
            $.ajax({
                url:"add_unit.php",
                method:"post",
                data:{details:details},
                //dataType:"json",
                success:function(data){
                    console.log(data);
                    window.location.assign("http://localhost/Rojo_sales/view_units.php");
                },
                error:function(xhr,status,error){
                    console.log(xhr);
                }
            });//End ajax
        }


        //Edit Products
        function editProduct(id){            
            $.ajax({

                url:"retrieve_units.php",
                method:"post",
                data:{id:id,
                      action:"edit"},
                      dataType:"json",
                success:function(data){
                    //console.log(data);
                    $('#edit-product-id').val(data.id);                   
                    $('#edit-product-unit').val(data.name);                   
                    $('#edit-unit').modal('show');
                },
                error:function(xhr,status,error){
                    console.log(xhr);
                }

            });//End ajax
        }

         //Edit Products
         function editStock(id){            
            $.ajax({

                url:"retrieve_products.php",
                method:"post",
                data:{stock_id:id,
                      action:"stock"},
                      dataType:"json",
                success:function(data){
                    console.log(data);
                    $('#stock-id').val(data.product_id);
                    $('#stock-name').val(data.product_name);
                    $('#stock-available').val(data.quantity);                  
                    
                    $('#update-product-stock-modal').modal('show');
                },
                error:function(xhr,status,error){
                    console.log(xhr);
                }

            });//End ajax
        }




          //Update Products
          function updateStock(id,added_qty){

        var product_details={
            product_id:id,
            added_qty:added_qty,           
        }

var details=JSON.stringify(product_details);

$.ajax({

    url:"update_stock.php",
    method:"post",
    data:{details:details},
    dataType:"json",
    success:function(data){
        console.log(data);
        window.location.assign("http://localhost/Rojo_sales/view_products.php");
    },
    error:function(xhr,status,error){
        console.log(xhr);
    }

});//End ajax
}




        //Update Products
        function updateProduct(unit,id){

            var product_details={
                product_id:id,                
                unit:unit,                
                action:"update"
                        }

            var details=JSON.stringify(product_details);

            $.ajax({

                url:"add_unit.php",
                method:"post",
                data:{details:details},
                dataType:"json",
                success:function(data){
                    console.log(data);
                   window.location.assign("http://localhost/Rojo_sales/view_units.php");
                },
                error:function(xhr,status,error){
                    console.log(xhr);
                }

            });//End ajax
        }
        

        //Delete Product
        function deleteProduct(id){
            $.ajax({
                url:"add_unit.php",
                method:"post",
                data:{id:id,action:"delete"},
                dataType:"json",
                success:function(data){
                    console.log(data);
                    window.location.assign("http://localhost/Rojo_sales/view_units.php");
                },
                error:function(xhr,status,error){
                    console.log(xhr);
                }
            });//End ajax
        }

    </script>
</body>
</html>