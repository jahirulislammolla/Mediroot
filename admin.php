<?php 
  require 'session_required.php';
  require 'connection.php';
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mediroot Pharma</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/Logo-2.jpg"/>
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/admin.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    
    
    
  
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/inventory8.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Check Inventory</h3>
          <p>Invetory</p>
        </div>      
      </div>

      <div class="item">
        <img src="images/maxresdefault.jpg" alt="Image">
        <div class="carousel-caption">
          <h3> Manage Invoice</h3>
          <p>Invoice Management</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="images/images.png" style="width:100% " alt="Image">
      <p>Inventory Management</p>
    </div>
    <div class="col-sm-4"> 
      <img src="images/1497328036806.jpg" class="img-responsive" style="width:100%; height: 270px;" alt="Image">
      <p>Invoice Management</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Here you can manage all of your products. We also provide you your territory wise sales. Manage your inventory. Enjoy the system.</p>
      </div>
      <div class="well">
       <p>Create dynamic invoice papers. There are all of the invoice records of your business. Enjoy the system. Best of luck. Happy business.</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>copyright: techavancer.com</p>
</footer>
 <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
           $(document).ready(function(){
            $('#admin').addClass('active');
          });
        </script>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_marketing&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:05:00 GMT -->
</html>
