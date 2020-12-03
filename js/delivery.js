var preloader = document.getElementById("preloader");
var tbody = document.querySelector("tbody");
var product_item = {};
var product_cart = [];

//   var product_cart = [{
//     id: "1",
//     name: "galaxy(280 * 67 * 4)cm",
//     price: "200",
//     remain: "6",
//   }];
window.addEventListener("load", function () {
  //declare product manipulation variables

  

  var selected_value = "2:galaxy(280 * 67 * 4)cm:200:6";

  var option_value="";
$('#product-select').change(function(){
     option_value=$(this).val();

     option_value===""?console.log("No value to add"):addProduct(option_value);

     

    // var carBrands = [];

    // var car1 = {name:'ford'};
    // var car2 = {name:'lexus'};
    // var car3 = {name:'maserati'};
    // var car4 = {name:'ford'};
    // var car5 = {name:'toyota'};
  
    // carBrands.push(car1);
    // carBrands.push(car2);
    // carBrands.push(car3);
    // carBrands.push(car4);
  
    // // ES6 approach which uses the includes method (Chrome47+, Firefox43+)
  
    // console.log(carBrands.includes(car1)) // -> true
    // console.log(carBrands.includes(car5)) // -> false
});





  
});

var selected_item;
var found;
var selected_values="";
var sn=1;
//add product to cart
function addProduct(selected_value) {
  selected_values = selected_value.split(":");  
  
  selected_item  = {
    id: selected_values[0],
    name: selected_values[1],
    unit: selected_values[2],
    qty:selected_values[3],
    rate: selected_values[4],
    
  };
 

  console.log(selected_item);
  
  var isFound=product_cart.filter(item=>(item.id==selected_item.id))
  isFound.length>0?console.log("data found"):(product_cart.push(selected_item),$("#td-empty").remove(),$('tbody').append(`<tr align="center"><td style="display:none" class="position">${product_cart.length-1}</td><td >${sn}</td><td class="product-detail">${selected_values[1]}</td><td class="unit">${selected_values[2]}</td><td align="center"><input type='number' min='1' max='5' value='1'class='form-control qty' align="center"></td><td class="price">${selected_values[4]}</td><td align="center"><input type='text'  value='${selected_values[4]}' class='form-control me' readonly></td><td align="center"><a href="#" class="btn btn-danger btn-sm remove-row" title="remove" >X</a></td><tr>`),sn++);
  //console.log(isFound);
  
 // found ? ("",console.log(found) ): (product_cart.push(selected_item),console.log(found));
 console.log(product_cart);
 getTotalPrice();

}
//get changed value from number input
var value_catched=0;

//Event Delegation
// document.addEventListener('click',function(e){
//     if(e.target && e.target.id== 'brnPrepend'){
//           //do something
//      }
//  });



$(document).on('change','.qty',function(){
var parentnode=$(this).closest("tr");
//var total=parentnode.find("td>input.me").val();

var price=parentnode.find("td.price").text();
var qty=$(this).val(); 
var total=parseInt(price)*parseInt(qty);
parentnode.find("td>input.me").val(total);
getTotalPrice();
//$('#grand-total').simpleMoneyFormat();
//$('td>input.me').simpleMoneyFormat();
});

$(document).on('click','.remove-row',function(){
    var parentnode=$(this).closest("tr");
    var position=parentnode.find("td.position").text();
    console.log(position);
    product_cart.splice(position,1);
    
    (sn>1)?sn=sn-1:sn=1;
    console.log("serial number:",sn);
    //var total=parentnode.find("td>input.me").val(); 
    parentnode.fadeOut('slow');
    setTimeout(() => {
        parentnode.remove();
        getTotalPrice();
    }, 1000);
    product_cart.length==0?$("tbody").append('<tr id="td-empty"><td  colspan="6" align="center">No Item Added</td> </tr>'):$("#td-empty").remove();
    console.log(product_cart.length);
    });


function getTotalPrice(){
    
var total_array=[];
var total_class_elements=document.querySelectorAll('input.me');

Array.from(total_class_elements).forEach(element=>{
    console.log(element.value);    

    total_array.push(element.value);
   // console.log(string);
   //alert(string);
});

var total_price=total_array.reduce((total,item)=>total+parseInt(item.replace(/[,]/g, '')),0);
console.log(total_price);

$('#grand-total').text(total_price);
//console.log(price,total); 

$('#grand-total').simpleMoneyFormat();
$('td>input.me' ).simpleMoneyFormat();
//$('.qty' ).simpleMoneyFormat();
}

$('.make-sell').click(function(){
  
  var item_description=[];
  var quantity=[];
  var unit_price=[];
  var total=[];
  

  var client_name="";
  var client_address="";
  var client_location="";
  var client_phone="";
  var sub_total=0;
  var discount=0;  
  var vat=0;
  var discount_total=0;
  var currency="";
  var amount_in_words="";
  

  var sales_details={}

//Get customer details
client_name=document.querySelector("#cname");
client_address=document.querySelector("#address");
client_location=document.querySelector("#location");
client_phone=document.querySelector("#phone");

//Get total extras

discount=document.querySelector("#discount").value;

discount_total=document.querySelector("#discount-total").innerText;
currency=document.querySelector(".currency:checked").value;
alert(currency);
vat=document.querySelector("#vat").innerText;
amount_in_words=document.querySelector("#amount-in-words").value;

  //get classList for data elements
 var product_detail= document.querySelectorAll(".product-detail");
Array.from(product_detail).forEach(detail=>item_description.push(detail.innerText));

 var product_quantity= document.querySelectorAll(".qty");
 Array.from(product_quantity).forEach(qty=>quantity.push(qty.value));

 var product_price= document.querySelectorAll(".price");
 Array.from(product_price).forEach(price=>unit_price.push(price.innerText));

 var product_total= document.querySelectorAll(".me");
 Array.from(product_total).forEach(tot=>total.push(tot.value.replace(/[,]/g, '')));

 var product_sub_total= document.querySelector("#grand-total");
  sub_total=product_sub_total.innerText.replace(/[,]/g, '');




sales_details={
  client:{
    name:client_name.value,
    address:client_address.value,
    location:client_location.value,
    phone:client_phone.value
  },
  item_details:item_description,
  quantity:quantity,
  price:unit_price,
  total:total,
  sub_total:sub_total,
  discount:discount,
  discount_total:discount_total,
  vat:vat,
  currency:currency,
  amount_in_words:amount_in_words
}



console.log(sales_details.item_details[0]);


//ajax call
$(document).ready(function(){
  var sale_no=0; 
  $.ajax({
    url:"http://localhost/Rojo_sales/generate_sales_order.php/",
    method:"post",
    cache:false,    
    data:{details:JSON.stringify(sales_details)},
    dataType:"json",
    success:function(data){
    console.log(data);
    sale_no=data.last_id;
$('.print-link').html(`<a href="http://localhost/Rojo_sales/salesInvoice.php?id=${sale_no}" class="btn btn-primary">Print Invoice</a>`);

    },
    
    error: function(xhr, status, error){
      console.error(xhr);
      }
    
  });
});



//console.log(item_description,quantity,unit_price,total,sub_total);
})


$(document).ready(function(){
  getProducts();
});

function getProducts(){
  var product_options='<option value="" class="text-danger">Please select product[s] for sale<option>';
  $.ajax({
    url:"http://localhost/Rojo_sales/retrieve_products.php/",
    method:"get",
    cache:false,    
    //data:{details:JSON.stringify(sales_details)},
    dataType:"json",
    success:function(data){
    console.log(data); 
    var products=data;

    products.forEach(product=>{
      product_options+=`<option value="${product.id}:${product.product_name}:${product.unit}:${product.quantity}:${product.rate}" class="">${product.id}:${product.product_name}:${product.unit}:remain-${product.quantity}:${product.rate}<option>`
    });

    $('#product-select').html(product_options);

    },
    
    error: function(xhr, status, error){
      console.error(xhr);
      }
    
  });
}






