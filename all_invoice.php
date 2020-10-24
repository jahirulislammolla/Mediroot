<?php
        require 'session_required.php';
        require 'connection.php';
        
        $invoices = $user->getAllInvoices();
        $terr = $user->getAllTerritory();
        if(isset($_POST['submit']))
        {

          $invoice_territory = $_POST['invoice_territory'][0];
          
          $invoices = $user->getInvoiceByTerritory($invoice_territory);
 
        }

        if(isset($_POST['submited']))
        {
          $i_id = $_POST['invoice_id'];
          header("location:final_invoice.php?id=$i_id");      
        }


?>

<!DOCTYPE html>
<html>
<head>
  <title>Invoice List</title>
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
                <br>
                <div class="note">
                  <div class="row">
                    <div class="col-md-6">
                      <form class="form-inline" role="form" method="POST">
                        
                        <div class="form-group">
                          <label for="pwd">Search By Invoice No:</label>
                          <input type="number" class="form-control" id="pwd" name="invoice_id" placeholder="Enter invoice no">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" input type="submit" name="submited">Search</button>
                      </form>
                    </div>

                    <div class="col-md-6">
                      <form class="form-inline" role="form" method="POST">
                        
                        <div class="form-group">
                          <label for="pwd">Search By Territory:</label>
                          <select class="form-control" name="invoice_territory[]" id="invoice_territory">
                              
                              <?php foreach ($terr as $row) {
                                ?>
                              <option value="<?php echo $row['territory_id'];?>"><?php echo $row['territory_name'];?></option>
                              <?php }?>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" input type="submit" name="submit">Search</button>
                      </form>
                    </div>
                        
                  </div>
                </div>
                        <hr>
                        <table class="table">
                          <thead class="thead-dark">
                            <tr >
                              <th class="text-center" scope="col">Invoice No</th>
                              <th class="text-center" scope="col">Chemist</th>
                              
                              <th class="text-center" scope="col">Territory</th>
                              <th class="text-center" scope="col">MPO</th>
                              <th class="text-center" scope="col">Total</th>
                              <th class="text-center" scope="col">Date</th>
                              <th class="text-center" scope="col">PDF</th>
                              <th  class="text-center" scope="col">Action</th>
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                                <?php foreach ($invoices as $row) { ?> 
                            <tr>
                                
                                        
                               
                              <th class="text-center" scope="row"><?php echo $row['invoice_id']; ?></th>
                              <td class="text-center">
                                <?php 
                                  $invoice_customer_id=$row['invoice_customer_id'];
                                  $customer = $user->getCustomer($invoice_customer_id);
                                  echo $customer['customer_name'];


                                ?>
                                  
                              </td>
                              <td class="text-center">
                                <?php 

                                  $ter = $row['invoice_territory_id'];
                                  $new = $user->getTerritoryById($ter);
                                  echo $new['territory_name'];

                                ?>
                                  
                              </td>
                              <td class="text-center"><?php echo $row['invoice_mpo']; ?></td>
                              <td class="text-center"><?php echo $row['invoice_total']; ?></td>
                              <td class="text-center"><?php echo $row['invoice_date']; ?></td>
                              <td class="text-center"><button class="btn btn-warning" onclick="window.location.href='invoice_pdf.php?id=<?php echo $row['invoice_id'] ;?>'">PDF</button></td>
                              
                              <td class="text-center"><button class="btn btn-success" onclick="window.location.href='final_invoice.php?id=<?php echo $row['invoice_id'] ;?>'">Details</button>  <button class="btn btn-danger" id="<?php echo 'delete_'.$row['invoice_id'] ;?>">Delete</button></td> 
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                </div>
        </div>
	
        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
           $(document).ready(function(){
            $("#all_invoice").addClass("active");
            $("button").on("click",function(e){
              var value=$(this).attr("id");
              if (typeof(value) != "undefined")
              {
                var value=value.split("_");
                if (value[0]==="delete")
                {
                  if(window.confirm("Are you sure delete this invoice?"))
                 {
                  window.location.href="delete_invoice.php?id="+value[1];
                 }
                 else{e.preventDefault();}
                }
                 
              }
            });
           
        });      
        </script>       
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>