<?php
  require 'session_required.php';
  require 'connection.php';
  $id=$_GET['id'];
  $product=$user->getProductById($id);
  //var_dump($product);


  
  
  if(isset($_POST['submit']))
  {
    
    
    $product_quantity = $_POST['product_quantity'];
    if($product_quantity<0)
    {
      $product_quantity = 0;
    }
    $new_quantity = $product_quantity+$product['product_quantity'];

    $name=$user->addStock($id,$new_quantity);
    if($product_quantity>0)
    {
      $add_date = date("F j, Y");
      $user->addRecord($id,$product_quantity,$add_date);
    }
    echo "Successfully updated!";
    header("location:inventory_manager.php");
    
   
  }

?>


<!DOCTYPE html>
<html>
<head>
  <title>Update Inventory</title>
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
  <?php include 'manager_navbar.php'; ?>
        <div class="container">
                <div class="note">
                    <h1 class="text-center"> Current Stock : <?php echo $product['product_quantity']; ?>
                        <h2>Add Stock</h2>
                        <hr>

                        <form method="POST" enctype="multipart/form-data">

                          

                          <div class="form-group">
                            <label for="exampleTextarea">Brand Name:</label>
                            <input type="text" name="brand_name" class="form-control" value="<?php echo $product['product_brand_name']; ?>" disabled>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Generic Name:</label>
                            <input type="text" name="generic_name" class="form-control" value="<?php echo $product['product_generic_name']; ?>" disabled>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Pack Size:</label>
                            <input type="text" name="product_pack_size" class="form-control" value="<?php echo $product['product_pack_size']; ?>" disabled>
                          </div>

                         

                          <div class="form-group">
                            <label for="exampleTextarea">Add Stock:</label>
                            <input type="number" name="product_quantity" class="form-control" placeholder="Enter no. of new Stock">
                          </div>

                          
                          

                          
                          
                          
                          <button type="submit" class="btn btn-primary" input type="submit" name="submit">Submit</button><br><br>
                      </form>

                        
                </div>
        </div>
 

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
          $( document ).ready(function() {
            $("#inventory_manager").addClass("active");
          });       
        </script>         
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>