<?php
  require 'session_required.php';
  require 'connection.php';
  $id=$_GET['id'];
  $product=$user->getTerritoryById($id);
  //var_dump($product);


  
  
  if(isset($_POST['submit']))
  {
    
    $territory_name = $_POST['territory_name'];
    $territory_district = $_POST['territory_district'];

    $name=$user->updateTerritory($id,$territory_name,$territory_district);
    echo "Successfully updated!";
    header("location:all_territory.php");
    
   
  }

?>


<!DOCTYPE html>
<html>
<head>
  <title>Update Territory</title>
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
                        <h2>Update Territory</h2>
                        <hr>

                        <form method="POST" enctype="multipart/form-data">

                          

                          <div class="form-group">
                            <label for="exampleTextarea">Territory Name:</label>
                            <input type="text" name="territory_name" class="form-control" value="<?php echo $product['territory_name']; ?>">
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">District:</label>
                            <input type="text" name="territory_district" class="form-control" value="<?php echo $product['territory_district']; ?>">
                          </div>

                          

                          

                          

                          

                          
                          
                          
                          <button type="submit" class="btn btn-primary" input type="submit" name="submit">Submit</button><br><br>
                      </form>

                        
                </div>
        </div>
 

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
          $( document ).ready(function() {
            $("#events_admin").addClass("active");
          });       
        </script>         
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>