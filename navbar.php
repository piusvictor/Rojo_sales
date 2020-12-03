<?php session_start();?>
<nav class="navbar fixed-top navbar-expand-sm bg-light navbar-light shadow-sm">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="./images/rojo_logo.png" alt="rojo_logo" width="120px" height="60px"></a>

  <!-- Links -->
  <ul class="navbar-nav mx-auto">

  <?php if($_SESSION['role']==="admin"){?>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/rojo_sales/view_products.php">Stock Products</a>
    </li>   
    <?php }?>
<!-- Dropdown -->

<?php if($_SESSION['role']==="admin"){?>
<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Purchase Products[ LPO ]
      </a>
      <div class="dropdown-menu">              
        <a class="dropdown-item" href="http://localhost/rojo_sales/view_purchase_products.php">Add Purchase Products</a>
        <a class="dropdown-item" href="http://localhost/rojo_sales/purchase.php">Generate Purchase Order</a>
      </div>
    </li>

    <?php }?>


    <li class="nav-item">
      <a class="nav-link" href="http://localhost/rojo_sales/sales.php">Proforma/Sales Invoices</a>
    </li>
    

    <!-- Dropdown -->
    <?php if($_SESSION['role']==="admin"){?>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Report
      </a>
      <div class="dropdown-menu">
      
        <a class="dropdown-item" href="http://localhost/rojo_sales/view_sales.php">Sales Order</a>  
        
        <a class="dropdown-item" href="http://localhost/Rojo_sales/view_proforma.php">Proforma Invoice</a>
        <a class="dropdown-item" href="#">Delivery Order</a>
        
      </div>
    </li>
    <?php }?>  
  </ul>

  <ul class="navbar-nav float-left" >
  
  <li class="nav-item">
      <a class="nav-link" href="http://localhost/rojo_sales/change_password.php">Change Password</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://localhost/rojo_sales/logout.php">Logout</a>
    </li>
  </ul>
</nav>
<br>
  

