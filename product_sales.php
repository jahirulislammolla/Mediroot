<?php
        require 'session_required.php';
        require 'connection.php';
        
        $product_id = $_GET['id'];
        $sales=$user->getSales($product_id);
        $products=$user->getProductById($product_id);
        $stocks = $user->getStockRecord($product_id);
        

        


?>

<!DOCTYPE html>
<html>
<head>
  <title>Product Record</title>
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
  <?php include 'navbar.php'; ?>
        <div class="container">
          <h3 class="text-center"><i> Product Generic Name: <?php echo $products['product_generic_name']; ?></i> </h3> 
          <h3 class="text-center"><i> Brand Name: <?php echo $products['product_brand_name']; ?> </i></h3> 
          <?php
            $invoice_product_quantity=0;
            $invoice_product_tp=0;
            $invoice_product_foc=0;

            foreach($sales as $row)
            {
              $invoice_product_quantity += $row['invoice_product_quantity'];
              $price = $row['invoice_product_quantity']*$row['invoice_product_tp'];
              $invoice_product_tp += $price;
              $invoice_product_foc += $row['invoice_product_foc'];

            }



          ?> 
          <div class="text-center">
            <p> Total sale: </p>
            <p> Quantity: <?php echo $invoice_product_quantity;  ?> </p>   
            <p> Cost: <?php echo $invoice_product_tp; ?> tk </p>   
            <p> FOC given: <?php echo $invoice_product_foc;  ?> </p> 
          </div> 
          <br>

          <h2 class="text-center">Add Stock Record </h2> 
          <?php if(!empty($stocks))
                {
           ?>
          <div class="col-md-offset-4 col-md-4">
                        <table class="table">
                          <thead class="thead-dark">
                            <tr >
                              <th class="text-center" scope="col">Product Id</th>
                              <th class="text-center" scope="col">Quantity</th>
                              
                              <th class="text-center" scope="col">Add Date</th>
                              
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                                <?php foreach ($stocks as $row) { ?> 
                            <tr>
                                
                                        
                               
                              <th class="text-center" scope="row"><?php echo $row['product_id']; ?></th>
                              
                              <td class="text-center"><?php echo $row['quantity']; ?></td>
                              <td class="text-center"><?php echo $row['add_date']; ?></td>
                              
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                        </div>
                        <?php }
                        else
                        {
                          echo "No Stock Added yet";
                        }
                        ?>
        </div>
  

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
           $(document).ready(function(){
            $('#inventory').addClass('active');
        });      
        </script>       
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>