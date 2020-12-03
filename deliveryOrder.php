<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Invoice</title>
    <link rel="stylesheet" href="css/sales_invoice.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/delivery.js"></script>
    <script src="js/simple.money.format.js"></script>
    <title>Delivery Order</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="logo">
                <img src="./images/rojo_logo.png" alt="rojo_logo" width="350px" height="160px">
            </div>
            <div class="proforma-heading">DELIVERY ORDER</div>
            <div class="company-details">
           
                <div class="from">
                    <table  style="margin-left:-2px;width:400px" >
                        <tr ><th class="table-padding1">Street <br>Address/Location:</th> <td class="table-padding">P.o Box 34681,Dar es salaam - Tanzania <br>KAMATA CORNER-Pugu Road</td></tr>
                        <tr ><th class="table-padding1">City & State:</th><td class="table-padding" >Dar es salaam - Tanzania</td></tr>
                        <tr ><th class="table-padding1">Phone:</th><td class="table-padding" >0757429030/0714504560</td></tr>
                        <tr ><th class="table-padding1">Email Address:</th><td class="table-padding" >rojoafrica2020@gmail.com</td></tr>
                    </table>
                </div>
                <div class="invoice-no">
                    <table  align="right" style="margin-right:-2px">
                        <tr><th class="table-padding1">Delivery Order No.</th> <td class="table-padding" id="sale-invoice-no">2020-01</td></tr>
                        <tr><th class="table-padding1">Date:</th><td class="table-padding" id="invoice-date">17/11/2020</td></tr>
                        
                    </table>
                </div>
            </div>
            <div class="client-details">
                <table  style="margin-left:-2px;width:400px" >
                    <tr ><th class="table-padding1">Bill To:</th><td class="table-padding" id="client-name" width="64.5%">FURNITURE CENTER</td></tr>
                    <tr ><th class="table-padding1">Street <br>Address/Location:</th> <td class="table-padding" ><span id="client-address">P.o Box 34681,Dar es salaam - Tanzania</span> <br><span id="client-location">KAMATA CORNER-Pugu Road</span></td></tr>                    
                    <tr ><th class="table-padding1">Phone:</th><td class="table-padding" id="client-phone">0716581629/0711522222</td></tr>
                    
                </table>
            </div>
            <div class="product-details">
                <table class="product-table-font" class="" width="100.5%" style="margin-left:-2px;">
                    <thead>
                      <tr align="center" class="">
                        <th width="5%" class=""  >No.</th>
                        <th width="25%" class="" >Item Description</th>
                        <th width="10%" class="" >Unit</th>
                        <th width="15%" class="" >Qty Ordered</th>
                        <th width="10%" class="" >Qty Delivered</th>                        
                        <th  width="20%" class="" >Comment</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                  </table>
            </div>
            <div class="payment-details">
                <b><i>Terms and Conditions:</i><br><br>Goods will be Inspected and Accepted by customer at sales office, no return will be accepted thereafter.<br><br><br><br>
            </div>
            <div class="sign-stamp">
                <div class="delivery-issued">Issued by ...............................................................
                    
                    </div>
                    <div class="stamp" style="margin-right:153px">Official stamp</div>
                    <div class="stamp" >Received by...............................</div>
            </div>
        </div>
    </div>

    <div class="invoice-print">
        <a href="#" class="btn btn-primary print-button" style="">print invoice</a>
    </div>

    <script>

//global declaration
var deliveryno="";                                      //$('#sale-invoice-no').text();
var deliveryDetails={};
var received_qty=0;
//data.sales;    


        $(document).ready(function(){
           // alert("a Call from JQuery");
           getInvoiceData();
           $('.print-button').click(function(){
            //call print function
            printInvoice();

           console.log(deliveryDetails); 
            //saveDeliveryOrder(deliveryno,deliveryDetails);

            });

         
        });



  //Function definition area

        //print invoice function
        function printInvoice() {
            var original_body=$('body').html();
                var temp_body=original_body;
                original_body=$('.container').html();
                $('.print-button').css('visibility','hidden');
                window.print();
                original_body=temp_body;
                $('.print-button').css('visibility','visible');
        }



        //fetch invoice data function
        function getInvoiceData(){
            $.ajax({
                
                    url:"http://localhost/Rojo_sales/retrieve_sales.php?id=<?=$_GET['id']?>",
                    method:"get",
                    cache:false,                    
                    dataType:"json",
                    success:function(data){                        
                    console.log(data);
                    //var count=1;
                    var invoice_table='';
                    data.sales.item_details.forEach((item,index)=>{
                        invoice_table+=
                       ` <tr>
                            <td class="table-body-padding" align="center">${index + 1}</td>
                            <td class="table-body-padding" align="left" style="padding-left:3px">${item}</td>
                            <td class="table-body-padding"  align="left" style="padding-left:40px">${data.sales.item_unit[index]}</td>
                            <td class="table-body-padding" align="center">${data.sales.quantity[index]}</td>
                            <td class="table-body-padding" align="center" style="padding-right:10px;border-right:2px solid black;"><input type="number" value=${data.sales.quantity[index]} id="received-qty" style="border-style:none;text-align:center"></td>                            
                            <td class="table-body-padding" align="left" style="padding-right:10px"><input type="text" placeholder="Comment here..." id="comment" style="border-style:none"></td>
                        </tr>`
                    });


                   // (12345.67).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');  // 12,345.67
                   $('#invoice-date').text(data.date);
                   $('#sale-invoice-no').text(data.sale_no.replace('INV','DO'));
                   $('#client-name').text(data.sales.client.name);
                   $('#client-address').text(data.sales.client.address);
                   $('#client-location').text(data.sales.client.location);
                   $('#client-phone').text(data.sales.client.phone);
                                        

                    console.log(invoice_table);
                   $('table.product-table-font>tbody').append(invoice_table);

                    deliveryno=$('#sale-invoice-no').text();
                    deliveryDetails=data.sales;                  

                   //saveDeliveryOrder(deliveryno,deliveryDetails);
                //    $('#grand-total').text( parseFloat(data.sub_total).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                  // $('#grand-total').simpleMoneyFormat();
                   //$('.money').simpleMoneyFormat();
                    },                    
                    error: function(xhr, status, error){
                    console.error(xhr);                    }
    
  
            });
        }

        //Save Delivery order
        function saveDeliveryOrder(salesno,salesdetails){
            var delivery={
                salesno:salesno,
                details:salesdetails
            }

            $.ajax({
                
                url:"http://localhost/Rojo_sales/generate_delivery_order.php",
                method:"post",
                cache:false,
                data:{delivery:JSON.stringify(delivery)},                    
                dataType:"json",
                success:function(data){                        
                console.log(data);
                }

            })


        }



    </script>
</body>
</html>