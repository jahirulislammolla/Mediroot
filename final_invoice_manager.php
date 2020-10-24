<?php
        require 'session_required.php';
        require 'connection.php';
        
        $id = $_GET['id'];
        
        $invoice = $user->getInvoice($id);
        
        $invoice_customer_id = $invoice['invoice_customer_id'];
        $customer = $user->getCustomer($invoice_customer_id);
        $invoice_id = $invoice['invoice_id'];
        $ip = $user->getInvoiceProducts($invoice_id);
        


        
        

        


?>

<!DOCTYPE html>
<html>
<head>
  <title>Invoice</title>
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
    <link href="css/final_invoice.css" rel="stylesheet"/>
    
    <link href="css/navbar.css" rel="stylesheet"/>
    <link href="css/footer.css" rel="stylesheet"/>
</head>
<body>
	<?php include 'manager_navbar.php'; ?>
        <div class="container">
          
            <div class="col-md-6">
              <h3><b> Customer's Info </b></h3>
              <p><?php echo $customer['customer_company_name'];?></p>
              <p><?php echo $customer['customer_name'];?></p>
              
              <p> <?php echo $customer['customer_address'];?></p>
              <p><?php echo $customer['customer_contact'];?></p>

            </div>
            <div class="col-md-6 text-right">
              <h3><b> Invoice No: <?php echo $invoice['invoice_id']; ?> </b></h3>
              <p><b> Invoice date:</b> <?php echo $invoice['invoice_date']; ?> </p>
              <p><b> Delivery date: </b><?php echo $invoice['invoice_delivery_date']; ?> </p>
              <p><b> MPO:</b> <?php echo $invoice['invoice_mpo']; ?> </p>
              <p><b> Territory:</b> 

                <?php 
                  $new = $invoice['invoice_territory_id'];
                  $to = $user->getTerritoryById($new);
                  echo $to['territory_name'];
                ?>

              </p>
              
            </div>

          
                
                
                      <div class="table-responsive-md">  
                        <table class="table table-bordered">
                          <thead class="thead-dark">
                            <tr >
                              <th class="text-center" scope="col">SN</th>
                              <th class="text-center" scope="col">Brand Name</th>
                              
                              <th class="text-center" scope="col">Generic Name</th>
                              <th class="text-center" scope="col">Pack Size</th>
                              
                              <th class="text-center" scope="col">TP(TK)</th>
                              <th class="text-center" scope="col">Quantity</th>
                              <th class="text-center" scope="col">FOC</th>
                              <th class="text-center" scope="col">Subtotal(TK) </th>
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                                <?php $i=1; ?>
                                <?php foreach ($ip as $row) { ?> 
                            <tr>
                                
                                        
                               
                              <th class="text-center" scope="row"><?php echo $i; $i++; ?></th>
                              <td class="text-center">
                                <?php
                                 $product_id = $row['invoice_product_id'];
                                 $pro = $user->getProductById($product_id);

                                  echo $pro['product_brand_name']; ?>
                                    
                              </td>
                              <td class="text-center"><?php echo $pro['product_generic_name']; ?></td>
                              <td class="text-center"><?php echo $pro['product_pack_size']; ?></td>
                              
                              <td class="text-center"><?php echo $row['invoice_product_tp']; ?></td>
                              <td class="text-center"><?php echo $row['invoice_product_quantity']; ?></td>
                              <td class="text-center"><?php echo $row['invoice_product_foc']; ?></td>
                              <td class="text-center"><?php echo ($row['invoice_product_tp']*$row['invoice_product_quantity']); ?></td>
                              

                             
                              
                              
                            </tr>

                            <?php } ?>
                            <tfoot>
                            <tr>
                              <td colspan="7"><b> Total </b></td>
                              <td class="text-center"> <?php echo $invoice['invoice_total']; ?> </td>
                            </tr>
                            <tr>
                              <td colspan="6"><b> Discount</b></td>
                              <td class="text-center"><b> <?php echo $invoice['invoice_discount']; ?></b> </td>
                              <td class="text-center"> <?php echo $invoice['invoice_discount_total']; ?> </td>
                            </tr>
                            
                            <tr>
                              <th colspan="7" > PRICE(TK)</th>
                              <th class="text-center"> <?php echo $invoice['invoice_price']; ?>  </th>
                            </tr>
                            </tfoot>
                          </tbody>
                        </table>
                      </div>
                </div>
        </div>
	<?php //include 'footer.php'; ?>

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
           $(document).ready(function(){
            $('#all_invoice_manager').addClass('active');
        });      
        </script>       
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>