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

    <title>View products</title>

</head>
<style>
   .nav-link {
    color:  rgb(185, 39, 39)  !important;
    }
</style>
<body>


<?php include('navbar.php')?>
    <div class="container " style="clear:both;margin-top:10%">
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Proforma No.</th>
                    <th>Customer</th>                    
                    <th>Date</th>
                    <th width="25%" ><span align="center"><b>Action</b></span></th>
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

   

    <script>
        $(document).ready(function(){
            getSales();                     
        });

        //Retrieve Products
        function getSales(){
            var output="";
            $.ajax({
                url:"retrieve_proforma.php",
                method:"GET",
                dataType:"json",
                success:function(data){
                    console.log(data);
                    var sales=data[0].sales;
                    var details=data[0].rows;



                    details.forEach((item,index)=>{
                        output+=`
                            <tr>
                                <td>${index+1}</td> 
                                <td>${item.sale_invoice_no}</td>
                                <td>${sales[index].client.name}</td>
                                <td>${item.created_At}</td>
                                                                                       
                                <td align='center'>
                                <a class="btn btn-outline-primary btn-sm  edit-button" href="proformaInvoice.php?id=${item.id}" data-id="${item.product_id}" >View</a>
                                
                                </td>                                                           
                            </tr>                 
                    
                    `;
                    });
                   

                    $('tbody').html(output);
                },
                error:function(xhr, status,error){
console.log(xhr);
                }
            });//End Ajax
        }


      


      
    </script>
</body>
</html>