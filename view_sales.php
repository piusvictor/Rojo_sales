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

    @page {
    @bottom-center {
    content: counter(page);
  }
}
</style>
<body>


<?php include('navbar.php')?>
    <div class="container " style="clear:both;margin-top:10%">
    <div class="d-flex mb-3" style="justify-content:center">
                <img src="./images/rojo_logo.png" alt="rojo_logo" width="200px" height="88px">
            </div>
            <div >
                <h4 class="text-center">Sales Report</h4>
                <hr>
            </div>
    <div class="mb-4 text-center">
        <label for=""><b>From Date:</b></label>        
            <input type="date" name="" id="date-from">

            <label for=""><b>To Date:</b></label>  
            <input type="date" name="" id="date-to" >
            <button class="btn btn-primary ml-3" id="filter-sales">Filter</button>
            <button class="btn btn-outline-primary ml-2" id="print-sales-report">Print Report</button>
        
    </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Sales No.</th>
                    <th>Customer</th> 
                    <th>Details</th> 
                    <th>Discount</th>                                      
                    <th>Date</th>
                    <th>Total</th>
                    <th width="10%" class="action"><span align="center"><b>Action</b></span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6" align="center">No Product Added </td>            
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" style="border-style-left:none;border-style-bottom:none"></td>
                    <td align="right"><b>Total sales</b></td>
                    <td align="right"><span class="font-weight-bold total-sales">0.00</span></td>
                    <td class="action"></td>
                </tr>
            </tfoot>
        </table>

    </div>     

   

    <script>
        $(document).ready(function(){
            getSales();     
            
            
            $('#filter-sales').click(function(){
                var dateFrom=$('#date-from').val();
                var dateTo=$('#date-to').val();

                //alert(dateFrom);
               filterSales(dateFrom,dateTo);
            });


            $('#print-sales-report').click(function(){
                printInvoice();  
            });
        });



        //print invoice function
        function printInvoice() {
            var original_body=$('body').html();
                var temp_body=original_body;
                original_body=$('.container').html();
                $('#print-sales-report').css('visibility','hidden');
                $('#filter-sales').css('visibility','hidden');
                $('.action').css('display','none');
               // $('td:nth-of-type(2)').css('display','none');
                window.print();
                original_body=temp_body;
                $('#print-sales-report').css('visibility','visible');
                $('#filter-sales').css('visibility','visible');
                //$('.action').css('visibility','visible');
                $('.action').css('display','block');
        }


        //Retrieve Products
        function getSales(){
            var output="";
            var total_sales=0;
            $.ajax({
                url:"retrieve_sales.php",
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
                                <td>${sales[index].item_details[0]}</td>
                                <td align="right">${parseFloat(sales[index].discount).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</td>
                                <td>${item.created_At}</td>
                                <td align="right">${parseFloat(sales[index].discount_total).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</td>                                                      
                                <td align='center' class="action">
                                <a class="btn btn-outline-primary btn-sm  edit-button" href="salesInvoice.php?id=${item.id}" data-id="${item.product_id}" >View</a>
                                
                                </td>                                                           
                            </tr>                 
                    
                    `;
                        var sum=parseInt((sales[index].discount_total).toString().replace(/[,]/g, ""));
                            total_sales+=parseInt(sum);




                    });
                   $('.total-sales').text(parseFloat(total_sales).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                    console.log(parseFloat(total_sales).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                    $('tbody').html(output);
                },
                error:function(xhr, status,error){
                console.log(xhr);
                }
            });//End Ajax
        }




          //Retrieve Products
          function filterSales(dateFrom,dateTo){
            var total_sales=0;
            var output="";
            $.ajax({
                url:"retrieve_sales.php",
                method:"GET",
                data:{dateFrom:dateFrom,dateTo:dateTo},
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
                                <td>${sales[index].item_details[0]}</td>
                                <td align="right">${parseFloat(sales[index].discount).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</td>
                                <td>${item.created_At}</td>
                                <td align="right">${parseFloat(sales[index].discount_total).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</td>                                                     
                                <td align='center' class="action">
                                <a class="btn btn-outline-primary btn-sm  edit-button" href="salesInvoice.php?id=${item.id}" data-id="${item.product_id}" >View</a>
                                
                                </td>                                                           
                            </tr>                 
                    
                    `;

                    var sum=parseInt((sales[index].discount_total).toString().replace(/[,]/g, ""));
                            total_sales+=parseInt(sum);


                    });
                    $('.total-sales').text(parseFloat(total_sales).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                    console.log(parseFloat(total_sales).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
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