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
    <script src="js/simple.money.format.js"></script>
    <title>Rojo sales Africa</title>
</head>
<style>

*{
    font-family: "Times New Roman", Times, serif;
}
    .table-padding1{
    padding-left: 15px;
    padding-right: 15px;
    padding-top:5px;
    padding-bottom:5px;
    font-size:16px;
    
}

.table-body-padding{
    padding-top:5px;
    padding-bottom:5px;
}

.product-table-font{
    font-size:16px;
    /*font-weight:bold;*/
}

.table-footer-font{
    font-size:15px;
    font-weight:400;
}

.table-width{
    width:200px;
}

.table-invoice-width{
    width:150px;
}

.bank-payment-details{
    font-size:16px;
    color:#0F5766;
}

.sign-stamp{
    display:flex;
    

}
.sign ,.stamp{
    font-size:14px;
    font-weight:bold;
}

.sign{
    margin-right:200px;
}

.border-3 {
    border-width:3px !important;
}

#grand-total {
    font-weight:800;
    font-size:16px;
}

</style>
<body>
   
<div class="container border border-3 border-dark pl-0 pr-0 pb-5 " style="margin-right:-20px,margin-left:-20px;margin-top:130px;max-height:82vh;min-height:82vh">
    <div class="logo mt-5" style="display:flex;justify-content:center;">
        <img src="./images/rojo_logo.png" alt="rojo_logo" width="350px" height="160px">
    </div>
    <div class="proforma-heading">
        <h3 class="proforma-invoice text-center mt-4 mb-5"><span class="text-danger font-weight-bold"> PROFORMA INVOICE</span></h3>
    </div>

    <div class="row mt-5 mb-4">
        <div class="col-md-6">
            <table border="2" style="margin-left:-3px" class="border-dark ">
                <tr ><th class="table-padding1">Street Address:</th> <td class="table-padding1 table-width font-weight-bold" style="border-right-width:2px">KAMATA CORNER</td></tr>
                <tr><th class="table-padding1">Location/Address:</th><td class="table-padding1 font-weight-bold" style="border-right-width:2px">P.O BOX 17277</td></tr>
                <tr><th class="table-padding1">Email Address:</th><td class="table-padding1 font-weight-bold" style="border-right-width:2px">rojo@gmail.com</td></tr>
            </table>

            <div class="mt-5">
            <table border="2" style="margin-left:-2px" class="border-dark">
                <tr><th class="table-padding1">Bill To:</th> <td class="table-padding1 table-width border-dark font-weight-bold" style="border-right-width:2px">FURNITURE CENTER</td></tr>
                <tr><th class="table-padding1">Location/Address:</th><td class="table-padding1 border-dark font-weight-bold">P.O BOX 16888</td></tr>
                <tr><th class="table-padding1">Phone:</th><td class="table-padding1 border-dark font-weight-bold">0716581629</td></tr>
            </table>
            </div>
        </div>
        <div class="col-md-6 mt-3">
        <table border="2" align="right" style="margin-right:-2px" class="border-dark">
                <tr><th class="table-padding1">Invoice no:</th> <td class="table-padding1 table-invoice-width border-dark font-weight-bold">2020-01</td></tr>
                <tr><th class="table-padding1">Date:</th><td class="table-padding1 border-dark font-weight-bold">17/11/2020</td></tr>
                
            </table>
        </div>
    </div>


    <div class="mt-5 pr-0">
    <table class="product-table-font" border="2" class="border-dark" width="100.6%" style="margin-left:-3px;">
                    <thead>
                      <tr align="center" class="border-dark border">
                        <th width="5%" class="border-dark border"  >No.</th>
                        <th width="25%" class="border-dark border" >Item Description</th>
                        <th width="15%" class="border-dark border" >Unit</th>
                        <th width="5%" class="border-dark border" >Quantity</th>
                        <th width="15%" class="border-dark border" >Rate</th>                        
                        <th  width="15%" class="border-dark border" >TOTAL</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                        <tr align="center" border="1" class="table-footer-font">
                        <td colspan="4" style="border-left-style:hidden;border-bottom-style:hidden;" class=""></td>
                        <td width="10%" class="border-dark" style="border-width:1px;border-right-width:1px;padding-right:10px;padding-left:40px" align="left"><b>SUB-TOTAL</b></td>
                        <td  class="border-dark" style="border-width:1px;padding-right:10px" align="right"><b><span id="grand-total" >0</span></b></td>
                    </tr>
                    <tr align="center" border="1" class="table-footer-font">
                        <td colspan="4" style="border-left-style:hidden;border-bottom-style:hidden;border-width:1px" class="border-dark"></td>
                        <td width="10%" class="border-dark" style="border-width:1px;border-right-width:1px;padding-left:40px" align="left"><b>DISCOUNT</b></td>
                        <td  class="border-dark" style="border-width:1px;padding-right:10px" align="right"><b><span id="grand-total">0</span></b></td>
                    </tr>
                    <tr align="center" border="1" class="table-footer-font">
                        <td colspan="4" style="border-left-style:hidden;border-bottom-style:hidden;border-width:1px" class="border-dark"></td>
                        <td width="10%" class="border-dark" style="border-width:1px;border-right-width:1px;padding-left:40px" align="left"><b>VAT</b></td>
                        <td  class="border-dark" style="border-width:1px;padding-right:10px" align="right"><b><span id="grand-total">0</span></b></td>
                    </tr>
                    <tr align="center"  class="table-footer-font">
                        <td colspan="4" style="border-left-style:hidden;border-bottom-style:visible;border-width:1px" class="border-dark"></td>
                        <td width="10%" class="border-dark" style="border-right-width:1px;padding-left:40px" align="left"><b>TOTAL</b></td>
                        <td  class="border-dark" style="padding-right:10px" align="right"><b><span id="grand-total" >0</span></b></td>
                    </tr>
                    <tr>
                    <td  width="20%" class=" " style="padding-left:40px" align="left">Amount in Words:</td>
                    <td colspan="5" style="padding-left:20px" class="">Tanzanian Shilling; Eleven billion six million five hundred thousand only</td>
                        
                    </tr>
                    </tfoot>
                  </table>
    </div>
<div class="row mt-2 mb-5">
    <div class="col-md-6 mt-2 mb-5 bank-payment-details">
    <b>Payment to be made in the following account;<br></b> Account Name: <b>ROJO AFRICA,</b> Account No:<b> 015C525140100,<br></b> Bank Name: <b>CRBD Bank,</b> Swift code: <b>CURUTZTZ,<br></b> Branch Name: <b>GOBA</b>
    </div>
    <div class="col-md-6"></div>
</div>

<div class="sign-stamp mt-5 mb-5" >
    <div class="sign">Prepared By ...............................................................
    <p class="mt-3" style="margin-left:85px">Sales Manager</p>
    </div>
    <div class="stamp">Official stamp</div>
    
</div>


</div>

<div class="invoice-print">
    <a href="#" class="btn btn-primary print-button" style="position:fixed;bottom:67%;right:7%;border-radius:20px">print invoice</a>
</div>


    <script>
        $(document).ready(function(){

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
                window.print();
                original_body=temp_body;
                $('.print-button').css('visibility','visible');
        }


        //fetch invoice data function
        function getInvoiceData(){
            $.ajax({
                
                    url:"http://localhost/Rojo_sales/retrieve.php",
                    method:"get",
                    cache:false,                    
                    dataType:"json",
                    success:function(data){                        
                    console.log(data);
                    //var count=1;
                    var invoice_table='';

                    data.item_details.forEach((item,index)=>{
                        invoice_table+=
                       ` <tr class="text-center">
                            <td class="border-0 table-body-padding">${index + 1}</td>
                            <td class="border-0 table-body-padding" align="left">${item}</td>
                            <td class="border-0 table-body-padding "  >slab</td>
                            <td class="border-0 table-body-padding money" >${data.quantity[index]}</td>
                            <td class="border-0 table-body-padding money" align="right" style="padding-right:10px">${parseFloat(data.price[index]).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</td>                            
                            <td class="border-0 table-body-padding money" align="right" style="padding-right:10px">${parseFloat(data.total[index]).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</td>
                        </tr>`
                    });


                   // (12345.67).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');  // 12,345.67

                    invoice_table+=
                       ` <tr class="text-center">
                            <td class="border-0 table-body-padding">3</td>
                            <td class="border-0 table-body-padding" align="left">Marble & Granite Adhesive</td>
                            <td class="border-0 table-body-padding ">500mg</td>
                            <td class="border-0 table-body-padding money">5</td>
                            <td class="border-0 table-body-padding money" align="right" style="padding-right:10px"> ${parseFloat("10000").toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</td>                            
                            <td class="border-0 table-body-padding money" align="right" style="padding-right:10px"> ${parseFloat("50000").toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')}</td>
                        </tr>`;
                    

                    console.log(invoice_table);
                   $('table.product-table-font>tbody').append(invoice_table);
                   $('#grand-total').text( parseFloat(data.sub_total).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'));
                  // $('#grand-total').simpleMoneyFormat();
                   //$('.money').simpleMoneyFormat();
                    },                    
                    error: function(xhr, status, error){
                    console.error(xhr);                    }
    
  
            });
        }

    </script>
</body>
</html>