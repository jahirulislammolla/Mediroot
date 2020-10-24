<?php
  require 'session_required.php';
  require 'connection.php';

  if(isset($_POST['submit']))
  {
    
    $product_brand_name = $_POST['brand_name'];
    $product_generic_name = $_POST['generic_name'];
    $product_pack_size = $_POST['product_pack_size'];
    $product_dosage_form = $_POST['product_dosage_form'];
    $product_quantity = $_POST['product_quantity'];
    $product_cog = $_POST['product_cog'];
    $product_tp = $_POST['product_tp'];
    $product_mrp = $_POST['product_mrp'];
    $product_foc_of = $_POST['product_foc_of'];
    $product_foc = $_POST['product_foc'];


    $check = $user->matchInventory($product_brand_name,$product_generic_name,$product_pack_size);
    if(empty($check))
    {
       if($product_brand_name and $product_generic_name and $product_pack_size and $product_dosage_form)
      {
        $name=$user->addInventory($product_brand_name,$product_generic_name,$product_pack_size,$product_dosage_form,$product_quantity,$product_cog,$product_tp,$product_mrp,$product_foc_of,$product_foc);
        echo "Successfully added!";
        header("location:inventory.php");
      }
      else
      {
        echo "Enter the required fields";
      }
    }
    else
    {
      echo "All ready in the list";
    }


  }

?>


<!DOCTYPE html>
<html>
<head>
  <title>Add Inventory</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        
    <link rel="icon" type="image/png" href="images/Logo-2.jpg"/>

    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i|Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    
    <link href="css/responsive.css" rel="stylesheet"/>
    <link href="css/notice.css" rel="stylesheet"/>
    <link href="css/navbar.css" rel="stylesheet"/>
    <link href="css/footer.css" rel="stylesheet"/>
</head>
<body>
  <?php include 'navbar.php'; ?>
        <div class="container">
                <div class="note">
                        <h2>Add Inventory</h2>
                        <hr>

                        <form method="POST" enctype="multipart/form-data">

                          

                          <div class="form-group">
                            <label for="exampleTextarea">Brand Name:</label>
                            <input type="text" name="brand_name" class="form-control" placeholder="Enter Brand name" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Generic Name:</label>
                            <input type="text" name="generic_name" class="form-control" placeholder="Enter generic Name" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Pack Size:</label>
                            <input type="text" name="product_pack_size" class="form-control" placeholder="Enter Pack Size(i.e 100 ml)" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Dosage Form:</label>
                            <input type="text" name="product_dosage_form" class="form-control" placeholder="i.e(Liquid)" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Stock Quantity:</label>
                            <input type="number" name="product_quantity" class="form-control" placeholder="enter quantity of products" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">COG:</label>
                            <input type="number" name="product_cog" class="form-control" placeholder="Enter COG" >
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">TP:</label>
                            <input type="number" name="product_tp" class="form-control" placeholder="Enter TP">
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">MRP:</label>
                            <input type="number" name="product_mrp" class="form-control" placeholder="Enter MRP">
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Free of Charge Out Of:</label>
                            <input type="number" name="product_foc_of" class="form-control" placeholder="Free of cost out of">
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Free of Charge:</label>
                            <input type="number" name="product_foc" class="form-control" placeholder="free of cost" >
                          </div>

                          

                          

                          

                          
                          
                          
                          <button type="submit" class="btn btn-primary" input type="submit" name="submit">Submit</button><br><br>
                      </form>

                        
                </div>
        </div>
 

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
          $( document ).ready(function() {
            $("#add_inventory").addClass("active");
          });       
        </script>         
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>