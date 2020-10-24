<?php
  require 'session_required.php';
  require 'connection.php';
  $discount = $user->getDiscount();

  if(isset($_POST['submit']))
  {
    
    
    $discounts = $_POST['discount'];
    $discount_date = date("F j, Y");
    if($discount!=0)
    {
      $name=$user->changeDiscount($discounts,$discount_date);
      header("location:admin.php");
      
    }

  }

?>


<!DOCTYPE html>
<html>
<head>
  <title>Update Discount</title>
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
                    <h1 class="text-center"> Current Discount : <?php echo $discount['discount']; ?>% </h1>
                    <h3 class="text-center"> Updated On : <?php echo $discount['discount_date']; ?> </h3>
                        <h2>Update Discount</h2>
                        <hr>

                        <form method="POST" enctype="multipart/form-data">

                          

                          

                         

                          <div class="form-group">
                            <label for="exampleTextarea">Discount:</label>
                            <input type="number" name="discount" class="form-control" value="<?php echo $discount['discount']; ?>">
                          </div>

                          
                          

                          
                          
                          
                          <button type="submit" class="btn btn-primary" input type="submit" name="submit">Submit</button><br><br>
                      </form>

                        
                </div>
        </div>
 

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
          $( document ).ready(function() {
            $("#discount").addClass("active");
          });       
        </script>         
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>