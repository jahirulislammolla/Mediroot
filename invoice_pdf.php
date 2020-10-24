<?php
        require 'session_required.php';
        require 'connection.php';
         if($_SERVER["REQUEST_METHOD"]=="GET")
{
        $id = $_GET['id'];
        
        $invoice = $user->getInvoice($id);
        
        $invoice_customer_id = $invoice['invoice_customer_id'];
        $customer = $user->getCustomer($invoice_customer_id);
        $invoice_id = $invoice['invoice_id'];
        $ip = $user->getInvoiceProducts($invoice_id);
        

        $new = $invoice['invoice_territory_id'];
        $to = $user->getTerritoryById($new);
        
        

        


?>

<!DOCTYPE html>
<html>
<head>
  <title>Invoice</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        

    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i|Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    
    <link href="css/responsive.css" rel="stylesheet"/>
    <link href="css/final_invoice.css" rel="stylesheet"/>
    
    <link href="css/navbar.css" rel="stylesheet"/>
    <link href="css/footer.css" rel="stylesheet"/>
    <style type="text/css">

    </style>
</head>
<body>
  <?php //include 'navbar.php'; 
  if(!isset($error)){

        //create html of the data
        ob_start();
        ?>
        <!-- <img  src="images/Logo-2.jpg" style="display: block; width: 25%; height: 10%; padding-left: 35%"> -->
        



              <table style="width: 80%; margin-left:10%;padding-top: 100px">
              	<tbody>
              		<tr>
              			<td style="width: 75%; font-weight: bold;">Customer's Info</td>
              			<td style="width: 30%; font-weight: bold;">Invoice No: <?php echo $invoice['invoice_id']; ?></td>
              		</tr>
              		<tr>
              			<td><?php echo $customer['customer_company_name'];?></td>
              			<td>Invoice date:<?php echo $invoice['invoice_date']; ?></td>
              		</tr>
              		<tr>
              			<td><?php echo $customer['customer_name'];?></td>
              			<td> Delivery date: <?php echo $invoice['invoice_delivery_date']; ?></td>
              		</tr>
              		<tr>
              			<td><?php echo $customer['customer_address'];?></td>
              			<td>MPO: <?php echo $invoice['invoice_mpo']; ?></td>
              		</tr>
              		<tr>
              			<td><?php echo $customer['customer_contact'];?></td>
              			<td>Territory:<?php echo $to['territory_name'];?></td>
              		</tr>
              	</tbody>
              </table>
              <br>
              <br>

          
                
                
                        <table class="table table-bordered" align="center" style="border-collapse: collapse;width: 80%;" border="1">
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
                              <td style="text-align: center;" class="text-center">
                                <?php
                                 $product_id = $row['invoice_product_id'];
                                 $pro = $user->getProductById($product_id);

                                  echo $pro['product_brand_name']; ?>
                                    
                              </td>
                              <td style="text-align: center;" class="text-center"><?php echo $pro['product_generic_name'];?></td>
                              <td style="text-align: center;" class="text-center"><?php echo $pro['product_pack_size']; ?></td>
                              
                              <td style="text-align: center;" class="text-center"><?php echo $row['invoice_product_tp']; ?></td>
                              <td style="text-align: center;" class="text-center"><?php echo $row['invoice_product_quantity']; ?></td>
                              <td style="text-align: center;" class="text-center"><?php echo $row['invoice_product_foc']; ?></td>
                              <td style="text-align: center;" class="text-center"><?php echo ($row['invoice_product_tp']*$row['invoice_product_quantity']); ?></td>
                              

                             
                              
                              
                            </tr>

                            <?php } ?>
                            <tfoot>
                            <tr>
                              <td colspan="7">Total</td>
                              <td style="text-align: center;" class="text-center"> <?php echo $invoice['invoice_total']; ?> </td>
                            </tr>
                            <tr>
                              <td colspan="6">Discount</td>
                              <td style="text-align: center;" class="text-center"> <?php echo $invoice['invoice_discount']; ?> </td>
                              <td style="text-align: center;" class="text-center"> <?php echo $invoice['invoice_discount_total']; ?> </td>
                            </tr>
                            
                            <tr>
                              <td colspan="7" ><b> PRICE(TK)</b></td>
                              <th class="text-center"> <?php echo $invoice['invoice_price']; ?>  </th>
                            </tr>
                            </tfoot>
                          </tbody>
                        </table>
                    
                </div>
        </div>
  <?php //include 'footer.php';

  $body = ob_get_clean();

        $body = iconv("UTF-8","UTF-8//IGNORE",$body);

        include("mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 20, 20, 20, 20, 0, 0); 

        //write html to PDF
        $mpdf->WriteHTML($body);
 
        //output pdf
        //$mpdf->Output('info.pdf','D');
        ob_clean();
        //open in browser
        $mpdf->Output();

        //save to server
        //$mpdf->Output("mydata.pdf",'F');

   }
   } ?>

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
           $(document).ready(function(){
            $('#courses_teacher').addClass('active');
        });      
        </script>       
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>