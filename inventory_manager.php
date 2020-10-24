<?php
        require 'session_required.php';
        require 'connection.php';
        
        $products = $user->getAllProducts();
        
        //var_dump($classes);
        if(isset($_POST['submit']))
        {
          $product_brand_name = $_POST['product_brand_name'];
          $product_generic_name = $_POST['product_generic_name'];

          if($product_brand_name and $product_generic_name)
          {
            $products = $user->getSearchedProducts($product_brand_name,$product_generic_name);

          }
          elseif($product_brand_name=="" AND $product_generic_name !="")
          {
            $products = $user->getProductsByGN($product_generic_name);
          }

          elseif($product_brand_name!="" AND $product_generic_name =="")
          {
            $products = $user->getProductsByBN($product_brand_name);
            

          }
          //var_dump($_POST);
        }

        


?>

<!DOCTYPE html>
<html>
<head>
  <title>Product List</title>
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
    <link href="css/inventory.css" rel="stylesheet"/>
    
    <link href="css/navbar.css" rel="stylesheet"/>
    <link href="css/footer.css" rel="stylesheet"/>
</head>
<body>
	<?php include 'manager_navbar.php'; ?>
        <div class="container-fluid">
                <br>
                <div class="note">
                  <div class="row text-center">
                    <form class="form-inline" role="form" method="POST">
                      <div class="form-group">
                        <label for="email">Search By Brand:</label>
                        <input type="text" class="form-control" id="email" name="product_brand_name" placeholder="Search by Brand Name">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Search By Generic Name:</label>
                        <input type="text" class="form-control" id="pwd" name="product_generic_name" placeholder="Search by Generic Name">
                      </div>
                      
                      <button type="submit" class="btn btn-primary" input type="submit" name="submit">Search</button>
                    </form>
                        
                  </div>
                </div>
                        <hr>
                        <table class="table">
                          <thead class="thead-dark">
                            <tr >
                              <th class="text-center" scope="col">P.Id</th>
                              <th class="text-center" scope="col">Brand Name</th>
                              
                              <th class="text-center" scope="col">Generic Name</th>
                              <th class="text-center" scope="col">Pack Size</th>
                              <th class="text-center" scope="col">Dosage Form</th>
                              <th class="text-center" scope="col">Stock</th>
                              
                              <th class="text-center" scope="col">TP</th>
                              <th class="text-center" scope="col">MRP</th>
                              <th class="text-center" scope="col">FOC out of</th>
                              <th class="text-center" scope="col">FOC </th>
                              <th class="text-center" scope="col">Record </th>
                              <th class="text-center" scope="col" style="color:red; font-size: 16px;">Action </th>
                              
                            </tr>
                          </thead>
                          <tbody>
                                <?php foreach ($products as $row) { ?> 
                            <tr>
                                
                                        
                               
                              <th class="text-center" scope="row"><?php echo $row['product_id']; ?></th>
                              <td class="text-center"><?php echo $row['product_brand_name']; ?></td>
                              <td class="text-center"><?php echo $row['product_generic_name']; ?></td>
                              <td class="text-center"><?php echo $row['product_pack_size']; ?></td>
                              <td class="text-center"><?php echo $row['product_dosage_form']; ?></td>
                              <td class="text-center"><?php echo $row['product_quantity']; ?></td>
                              
                              <td class="text-center"><?php echo $row['product_tp']; ?>tk</td>
                              <td class="text-center"><?php echo $row['product_mrp']; ?>tk</td>
                              <td class="text-center"><?php echo $row['product_foc_of']; ?></td>
                              <td class="text-center"><?php echo $row['product_foc']; ?></td>
                              <td class="text-center"><button class="btn btn-info" onclick="window.location.href='product_sales_manager.php?id=<?php echo $row['product_id'] ;?>'">Record</button></td>
                              <td class="text-center"><button class="btn btn-success" onclick="window.location.href='update_stock.php?id=<?php echo $row['product_id'] ;?>'">Add Stock</button>  </td>

                             
                              
                              
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                </div>
        </div>
	<?php //include 'footer.php'; ?>

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
           $(document).ready(function(){
            $('#inventory_manager').addClass('active');
        });      
        </script>       
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>