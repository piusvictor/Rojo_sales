<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profoma Invoice</title>
    <link rel="stylesheet" href="css/sales_invoice.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/sales.js"></script>
    <script src="js/simple.money.format.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="logo">
                <img src="./images/rojo_logo.png" alt="rojo_logo" width="350px" height="160px">
            </div>
            <div class="proforma-heading">PROFORMA INVOICE</div>
            <div class="company-details">
                <div class="from">
                    <table  style="margin-left:-2px;width:400px" >
                        <tr ><th class="table-padding1">Street <br>Address/Location:</th> <td class="table-padding">P.o Box 34681,Dar es salaam - Tanzania <br>KAMATA CORNER-Pugu Road</td></tr>
                        <tr ><th class="table-padding1">City & State:</th><td class="table-padding" >Dar es salaam - Tanzania</td></tr>
                        <tr ><th class="table-padding1">Phone:</th><td class="table-padding" >0716581629/0711522222</td></tr>
                        <tr ><th class="table-padding1">Email Address:</th><td class="table-padding" >rojo@gmail.com</td></tr>
                    </table>
                </div>
                <div class="invoice-no">
                    <table  align="right" style="margin-right:-2px">
                        <tr><th class="table-padding1">Proforma no:</th> <td class="table-padding" id="sale-invoice-no">2020-01</td></tr>
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
                        <th width="15%" class="" >Unit</th>
                        <th width="5%" class="" >Quantity</th>
                        <th width="15%" class="" >Rate</th>                        
                        <th  width="15%" class="" >TOTAL</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                    <tr align="center"  class="table-footer-font">
                        <td colspan="4" style="border-left-style:hidden;border-bottom-style:hidden;" class="custom-table-border"></td>
                        <td width="10%"  class="custom-table-border" style="border-width:1px;border-right-width:1px;padding-right:10px;padding-left:20px" align="left"><b>SUB-TOTAL</b></td>
                        <td  class="custom-table-border" style="border-width:1px;padding-right:10px" align="right"><b><span id="grand-total" >0</span></b></td>
                    </tr>
                    <tr align="center"  class="table-footer-font">
                        <td colspan="4" style="border-left-style:hidden;border-bottom-style:hidden;border-width:1px"></td>
                        <td width="10%" class="custom-table-border" style="border-width:1px;border-right-width:1px;padding-left:20px" align="left"><b>DISCOUNT</b></td>
                        <td  class="custom-table-border" style="border-width:1px;padding-right:10px" align="right"><b><span id="discount">0</span></b></td>
                    </tr>
                    <tr align="center"  class="table-footer-font">
                        <td colspan="4" style="border-left-style:hidden;border-bottom-style:hidden;border-width:1px" class="custom-table-border"></td>
                        <td width="10%"  style="border-width:1px;border-right-width:1px;padding-left:20px" align="left" class="custom-table-border"><b>VAT</b></td>
                        <td   style="border-width:1px;padding-right:10px" align="right" class="custom-table-border"><b><span id="vat" >0.00</span></b></td>
                    </tr>
                    <tr align="center"  class="table-footer-font">
                        <td colspan="4" style="border-left-style:hidden;border-bottom-style:visible;border-width:1px"></td>
                        <td width="10%"  style="border-right-width:1px;padding-left:20px" align="left" class="custom-table-border"><b>TOTAL</b></td>
                        <td   style="padding-right:10px" align="right" class="custom-table-border"><b><span id="discount-total" >0</span></b></td>
                    </tr>
                    <tr>
                    <td  width="20%" class=" custom-table-border" style="padding-left:40px" align="left">Amount in Words:</td>
                    <td colspan="5" style="padding-left:20px" class="custom-table-border"><span id="currency">Tanzanian Shilling</span>; <span id="amount-in-words">Total Not yet Calculated!</span> only</td>
                        
                    </tr>
                    </tfoot>
                  </table>
            </div>
            <div class="payment-details">
                <b>Payment to be made in the following account;<br></b> Account Name: <b>ROJO AFRICA,</b> Account No:<b> 015C525140100,<br></b> Bank Name: <b>CRBD Bank,</b> Swift code: <b>CURUTZTZ,<br></b> Branch Name: <b>GOBA</b>
            </div>
            <div class="sign-stamp">
                <div class="sign">Prepared By ...............................................................
                    <p  style="margin-left:85px;margin-top:5px">Sales Manager</p>
                    </div>
                    <div class="stamp">Official stamp</div>
            </div>
        </div>
    </div>

    <div class="invoice-print">
        <a href="#" class="btn btn-primary print-button" style="">print invoice</a>
    </div>

    <div class="invoice-print">
        <a href="#" class="btn-back btn-primary back-button"  onclick="window.history.back()">Go Back</a>
    </div>

    <script>
        $(document).ready(function(){
           // alert("a Call from JQuery");
           getInvoiceData();
           $('.print-button').click(function(){
            //call print function
            printInvoice();

            });

         
        });



  //Function definition area

        //print invoice function
        function printInvoice() {
            var original_body=$('body').html();
                var temp_body=original_body;
                original_body=$('.container').html();
                $('.print-button').css('visibility','hidden');
                $('.back-button').css('visibility','hidden');
                window.print();
                original_body=temp_body;
                $('.print-button').css('visibility','visible');
                $('.back-button').css('visibility','visible');
        }



        //fetch invoice data function
        function getInvoiceData(){
            $.ajax({
                
                    url:"http://localhost/Rojo_sales/retrieve_proforma.php?id=<?=$_GET['id']?>",
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
                            <td class="table-body-padding"  align="left" style="padding-left:40px">slab</td>
                            <td class="table-body-padding" align="center">${data.sales.quantity[index]}</td>
                            <td class="table-body-padding" align="right" style="padding-right:10px">${parseFloat(data.sales.price[index]).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</td>                            
                            <td class="table-body-padding" align="right" style="padding-right:10px">${parseFloat(data.sales.total[index]).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</td>
                        </tr>`
                    });


                   // (12345.67).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');  // 12,345.67


                    console.log(invoice_table);
                   $('table.product-table-font>tbody').append(invoice_table);

                   $('#grand-total').text( parseFloat(data.sales.sub_total).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                   $('#discount').text( parseFloat(data.sales.discount).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                   $('#discount-total').text( parseFloat(data.sales.discount_total).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                  // $('#grand-total').simpleMoneyFormat();
                   //$('.money').simpleMoneyFormat();

                   $('#invoice-date').text(data.date);
                   $('#sale-invoice-no').text(data.sale_no);
                   $('#client-name').text(data.sales.client.name);
                   $('#client-address').text(data.sales.client.address);
                   $('#client-location').text(data.sales.client.location);
                   $('#client-phone').text(data.sales.client.phone);
                   $('#currency').text(data.sales.currency);
                   $('#amount-in-words').text(data.sales.amount_in_words);



                    },                    
                    error: function(xhr, status, error){
                    console.error(xhr);                    }
    
  
            });
        }



    </script>
</body>
</html>