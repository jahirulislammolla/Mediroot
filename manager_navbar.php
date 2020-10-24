<?php

  $discount = $user->getDiscount();


?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="edit_navbrand">
        <a class="navbar-brand" href="manager.php"><img style="width:180px; height: 50px;margin: -15px;" src="images/Logo-2.jpg"></a>
      </div> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav nav_color">
        <li id="manager_page"><a href="manager.php">Home</a></li>
               
        
        <li id="inventory_manager"><a href="inventory_manager.php">Product List</a></li>
        
        <li id="all_invoice_manager"><a href="all_invoice_manager.php">Invoices</a></li>
        <li id="create_invoice_manager"><a href="create_invoice_manager.php">Create invoice</a></li>
        <li id="all_territory_manager"><a href="all_territory_manager.php">Territory List</a></li>
        
        <li><a href="#" style="color: red;">Discount <?php echo $discount['discount']; ?>%</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li id="my_account"><a href="my_account.php">My Account</a></li>

        <li><a href="logout.php"><span class="glyphicon"></span>Logout</a></li>
        
      </ul>
    </div>
  </div>
</nav>