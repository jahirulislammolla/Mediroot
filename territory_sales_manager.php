<?php
  require 'session_required.php';
  require 'connection.php';
  
  $territory_id=$_GET['id'];
  $territory = $user->getTerritoryById($territory_id);
  $invoices = $user->getInvoicesFromTerritory($territory_id);
  $no_invoices = count($invoices);
  
  $quantity = [];
  $total = [];

  for ($i=0; $i <$no_invoices ; $i++)
  { 
    
    $invoice_products = $user->getProductsFromInvoice($invoices[$i][0]);
  

    $x=$invoice_products[0]['invoice_product_id'];
    $y=(int)($invoice_products[0]['invoice_product_quantity']);
    $z=(int)($invoice_products[0]['invoice_product_tp']);
    
    if (array_key_exists($x, $quantity)) 
    {
      $quantity[$x] += $y;
      $total[$x] += $y*$z;
    }
    else
    {
      $quantity[$x] = $y;
      $total[$x] = $y*$z;

    }
    

  }

?>


<!DOCTYPE html>
<html>
<head>
  <title>Territory Record</title>
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
          <div class="text-center">
                <h2> Territory: <?php echo $territory['territory_name'];?>, District: <?php echo $territory['territory_district'];?>  </h2>
                <h3> Total Invoices: <?php echo $no_invoices; ?></h3>
                <br>
          </div>

                    <table class="table">
                          <thead class="thead-dark">
                            <tr >
                              <th class="text-center" scope="col">Product Name</th>
                              <th class="text-center" scope="col">Brand Name</th>
                              
                              <th class="text-center" scope="col">Pack Size</th>
                              <th class="text-center" scope="col">Sold Quantity</th>
                              <th class="text-center" scope="col">Total Amount</th>
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                                <?php foreach ($quantity as $i=>$value) { 
                                  $pro = $user->getProductById($i);
                                  
                                  ?> 
                            <tr>
                                
                                        
                               
                              <th class="text-center" scope="row"><?php echo $pro['product_generic_name']; ?></th>
                              
                              <td class="text-center"><?php echo $pro['product_brand_name']; ?></td>
                              <td class="text-center"><?php echo $pro['product_pack_size']; ?></td>
                              <td class="text-center"><?php echo $quantity[$i]; ?></td>
                              <td class="text-center"><?php echo $total[$i]; ?></td>
                              
                              

                             
                              
                              
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
        </div>
 

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
          $( document ).ready(function() {
            $("#all_territory_manager").addClass("active");
          });       
        </script>         
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>