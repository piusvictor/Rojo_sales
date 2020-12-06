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
    <a href="#" class="btn btn-info btn-sm mb-4 mr-2" data-toggle="modal" data-target="#add-product-modal">Add New Product</a>

    <a href="http://localhost/Rojo_sales/print_product_stock.php" class="btn btn-outline-success btn-sm mb-4"  >Print product stock</a>
    </div>
        <table class="table table-bordered" id="my-table" style="width:100%">
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
                <tr>
                    <td colspan="5" align="center">No Product Added </td>            
                </tr>
            </tbody>
            <tfoot>
        
            </tfoot>
        </table>

    </div>



        <!-- The Add Product Modal -->
    <div class="modal" id="add-product-modal">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Add Product</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body form-group">
            
            <form action="" method="get">
            
            <label for="">Product Name:</label>
            <input type="text" name="product-name" id="product-name" placeholder="Product Name here.." class="form-control">

            <label for="">Product Unit:</label>
            <input type="text" name="product-unit" id="product-unit" placeholder="Product Unit here.." class="form-control">

            <label for="">Product Rate:</label>
            <input type="number" name="product-rate" id="product-rate" placeholder="Product Rate here.." class="form-control">

            <label for="">Quantity:</label>
            <input type="number" name="product-qty" id="product-qty" placeholder="Product qty.." value="0" class="form-control">
            
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
            <h4 class="modal-title">Update Product Stock</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body form-group">
            
            <form action="" method="get">
            
            <label for="">Product Name:</label>
            <input type="text" name="stock-name" id="stock-name"  class="form-control" readonly>           

            <label for="">Available Products:</label>
            <input type="number" name="stock-available" id="stock-available"  class="form-control" readonly>

            <label for="">Quantity to update:</label>
            <input type="number" name="stock-qty" id="stock-qty"  value="1" class="form-control">

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
 <div class="modal" id="edit-product">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Product</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body form-group">
      <form action="" method="get">
        
        <label for="">Id no:</label>
        <input type="text" name="product-id" id="edit-product-id"  class="form-control" style="width:20%" readonly>

        <label for="">Product Name:</label>
        <input type="text" name="product-name" id="edit-product-name" placeholder="Product Name here.." class="form-control">

        <label for="">Product Unit:</label>
        <input type="text" name="product-unit" id="edit-product-unit" placeholder="Product Unit here.." class="form-control">

        <label for="">Product Rate:</label>
        <input type="number" name="product-rate" id="edit-product-rate" placeholder="Product Rate here.." class="form-control">
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
            getProducts();
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
                var product_name=$('#product-name').val();
                var product_unit=$('#product-unit').val();
                var product_rate=$('#product-rate').val();
                var product_qty=$('#product-qty').val();
                addProduct(product_name,product_unit,product_rate,product_qty);
            });

            $('#update').click(function(){     
                var product_id=$('#edit-product-id').val();           
                var product_name=$('#edit-product-name').val();
                var product_unit=$('#edit-product-unit').val();
                var product_rate=$('#edit-product-rate').val();
                updateProduct(product_name,product_unit,product_rate,product_id);
            });

            
            
            $(document).on('click','.delete-btn',function(){
                var id =$(this).data('id'); 
                
                if(confirm('Are sure you want to delete this product?')){
                    deleteProduct(id);
                }
                

            });
            //

        });


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
                                <td>
                                <a class="btn btn-primary btn-sm  edit-button" href="#" data-id="${item.product_id}" >Edit</a>
                                <a class="btn btn-danger btn-sm delete-btn" href="#" data-id="${item.product_id}">Delete</a>
                                <a class="btn btn-success btn-sm  stock-button" href="#" data-id="${item.product_id}" >Update Stock</a>
                                </td>                                                           
                            </tr>                 
                    
                    `;
                    });
                   

                    $('tbody').html(output);
                },
                error:function(xhr, status,error){

                }
            });//End Ajax
        }


        //Add products
        function addProduct(product_name,unit,rate,qty){
            var product_details={
                product_name:product_name,
                unit:unit,
                rate:rate,
                qty:qty,
                action:"add"
            }

            var details=JSON.stringify(product_details);
            //var details=product_details;
            
            $.ajax({
                url:"add_product.php",
                method:"post",
                data:{details:details},
                //dataType:"json",
                success:function(data){
                    console.log(data);
                    window.location.assign("http://localhost/Rojo_sales/view_products.php");
                },
                error:function(xhr,status,error){
                    console.log(xhr);
                }
            });//End ajax
        }


        //Edit Products
        function editProduct(id){            
            $.ajax({

                url:"retrieve_products.php",
                method:"post",
                data:{id:id,
                      action:"edit"},
                      dataType:"json",
                success:function(data){
                    //console.log(data);
                    $('#edit-product-id').val(data.id);
                    $('#edit-product-name').val(data.product_name);
                    $('#edit-product-unit').val(data.unit);
                    $('#edit-product-rate').val(data.rate);
                    $('#edit-product').modal('show');
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
        function updateProduct(product_name,unit,rate,id){

            var product_details={
                product_id:id,
                product_name:product_name,
                unit:unit,
                rate:rate,
                action:"update"
            }

            var details=JSON.stringify(product_details);

            $.ajax({

                url:"add_product.php",
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
        

        //Delete Product
        function deleteProduct(id){
            $.ajax({
                url:"add_product.php",
                method:"post",
                data:{id:id,action:"delete"},
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

    </script>
</body>
</html>