<?php
  require 'session_required.php';
  require 'connection.php';
  $id=$_GET['id'];
  $product=$user->getProductById($id);
  //var_dump($product);


  
  
 

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
    <style type="text/css">
    </style>
</head>
<body>
  <?php include 'navbar.php'; ?>
        <div class="container">
                <div class="note">
                        <h2>Update Inventory</h2>
                        <hr>

                        <!-- <form method="POST" enctype="multipart/form-data"> -->

                          

                          <div class="form-group">
                            
                              <label for="exampleTextarea">Brand Name:</label>
                             <div class="row"> 
                                <div class="col-md-10">
                                  <input id='product_brand_name_input' type="text" name="product_brand_name" class="form-control" value="<?php echo $product['product_brand_name']; ?>" disabled>
                                 </div> 
                                 <div class="col-md-2">
                                  <button id="product_brand_name" class="btn btn-success">Edit</button>
                                 </div> 
                             </div> 
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Generic Name:</label>
                            <div class="row"> 
                                <div class="col-md-10">
                                  <input type="text" id="product_generic_name_input" name="product_generic_name" class="form-control" value="<?php echo $product['product_generic_name']; ?>" disabled>
                                 </div> 
                                 <div class="col-md-2">
                                  <button id="product_generic_name" class="btn btn-success">Edit</button>
                                 </div> 
                             </div> 
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Pack Size:</label>
                            <div class="row"> 
                                <div class="col-md-10">
                                  <input type="text" id="product_pack_size_input" name="product_pack_size" class="form-control" value="<?php echo $product['product_pack_size']; ?>" disabled>
                                 </div> 
                                 <div class="col-md-2">
                                  <button id="product_pack_size" class="btn btn-success">Edit</button>
                                 </div> 
                             </div> 
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Dosage Form:</label>
                            <div class="row"> 
                                <div class="col-md-10">
                                  <input type="text" id="product_dosage_form_input" name="product_dosage_form" class="form-control" value="<?php echo $product['product_dosage_form']; ?>" disabled>      
                                 </div> 
                                 <div class="col-md-2">
                                  <button id="product_dosage_form" class="btn btn-success">Edit</button>
                                 </div> 
                             </div> 
                            
                            
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Quantity:</label>
                            <div class="row"> 
                                <div class="col-md-10">
                                    <input type="number" id="product_quantity_input" name="product_quantity" class="form-control" value="<?php echo $product['product_quantity']; ?>" disabled>      
                                 </div> 
                                 <div class="col-md-2">
                                  <button id="product_quantity" class="btn btn-success">Edit</button>
                                 </div> 
                             </div> 
                            
                            
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">COG:</label>
                            <div class="row"> 
                                <div class="col-md-10">
                                   <input  id="product_cog_input" type="number" name="product_cog" class="form-control" value="<?php echo $product['product_cog']; ?>" disabled>
                                 </div> 
                                 <div class="col-md-2">
                                  <button id="product_cog" class="btn btn-success">Edit</button>
                                 </div> 
                             </div> 
                           
                          
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">TP:</label>
                            <div class="row"> 
                                <div class="col-md-10">
                            <input id="product_tp_input" type="number" name="product_tp" class="form-control" value="<?php echo $product['product_tp']; ?>" disabled>
                                 </div> 
                                 <div class="col-md-2">
                                  <button id="product_tp" class="btn btn-success">Edit</button>
                                 </div> 
                             </div> 
                            
                          
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">MRP:</label>
                            <div class="row"> 
                                <div class="col-md-10">
                                  <input id="product_mrp_input" type="number" name="product_mrp" class="form-control" value="<?php echo $product['product_mrp']; ?>" disabled>
                                 </div> 
                                 <div class="col-md-2">
                                  <button id="product_mrp" class="btn btn-success">Edit</button>
                                 </div> 
                             </div> 
                            
                            
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Free of Charge Out Of:</label>
                            <div class="row"> 
                                <div class="col-md-10">
                                  
                                  <input id='product_foc_of_input' type="number" name="product_foc_of" class="form-control" value="<?php echo $product['product_foc_of']; ?>" disabled>
                                 </div> 
                                 <div class="col-md-2">
                                  <button id="product_foc_of" class="btn btn-success">Edit</button>
                                 </div> 
                             </div> 
                            
                           
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Free of Charge:</label>
                            <div class="row"> 
                                <div class="col-md-10">
          
                                  <input id="product_foc_input" type="number" name="product_foc" class="form-control" value="<?php echo $product['product_foc']; ?>" disabled>
                                 </div> 
                                 <div class="col-md-2">
                                  <button id="product_foc" class="btn btn-success">Edit</button>
                                 </div> 
                             </div> 
                            
                            
                          </div>

                          
                         
                      <!-- </form> -->

                        
                </div>
        </div>
 

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
          $( document ).ready(function() {
            $("button").on("click",function(){
                var value=$(this).html();
                var id="#"+$(this).attr("id")+"_input";
                if(value=="Edit")
                {
                  $(id).prop("disabled", false);
                  $(this).html("OK");
                  $(this).removeClass("btn btn-success");
                  $(this).addClass("btn btn-warning");
                }
                else{
                   $(this).html("Edit");
                   $(this).removeClass("btn btn-warning");
                   $(this).addClass("btn btn-success");
                   $(id).prop("disabled", true);
                   $.ajax({ 
                    type: 'POST', 
                    url: 'update_product_db.php', 
                    data: { "name":$(this).attr("id"),"value":$(id).val(),"id":<?php echo $id;?>}, 
                    success: function (data) {
                      console.log(data);
                     }
                  });
                }
            });
          });       
        </script>         
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>