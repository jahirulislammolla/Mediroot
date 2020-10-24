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
        <a class="navbar-brand" href="admin.php"><img style="width:180px; height: 50px;margin: -15px;" src="images/Logo-2.jpg"></a>
      </div> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav nav_color">
        <li id="admin"><a href="admin.php">Home</a></li>
               
        
        <li id="inventory"><a href="inventory.php">Product List</a></li>
        <li id="add_inventory"><a href="add_inventory.php">Add Inventory</a></li>
        <li id="all_invoice"><a href="all_invoice.php">Invoices</a></li>
        <li id="invoice"><a href="invoice.php">Create invoice</a></li>
        <li id='events_admin' class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Territory
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li><a href="all_territory.php">Territory List</a></li>
            <li><a href="add_territory.php">Add Territory</a></li>
            
          </ul>
        </li>

        <li id='events_admin_2' class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li><a href="me.php">My Account</a></li>
            <li><a href="users.php">Others</a></li>
            <li><a href="add_user.php">Add User</a></li>
            
          </ul>
        </li>
        <li id="discount"><a href="discount.php" style="color: red;">Discount <?php echo $discount['discount']; ?>%</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon"></span>Logout</a></li>
        
      </ul>
    </div>
  </div>
</nav>