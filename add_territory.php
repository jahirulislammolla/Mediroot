<?php
  require 'session_required.php';
  require 'connection.php';
  


  
  
  if(isset($_POST['submit']))
  {
    
    
    $territory_name = $_POST['territory_name'];
    $territory_district = $_POST['territory_district'];
    $territory_add_date = date("F j, Y");
    $check = $user->matchTerritory($territory_name,$territory_district);
    //var_dump($check);

    if(empty($check))
    {
      if ($territory_name AND $territory_district)
      {
        $user->addTerritory($territory_name,$territory_district,$territory_add_date);
        header("location:all_territory.php");
      }
      else
      {
        echo "Enter the fields";
      }
    }
    else
    {
      echo "This territory already exists in the list";
    }
    
    
   
  }

?>


<!DOCTYPE html>
<html>
<head>
  <title>Add Territory</title>
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
                    
                        <h2>Add Territory</h2>
                        <hr>

                        <form method="POST" enctype="multipart/form-data">

                          

                          <div class="form-group">
                            <label for="exampleTextarea">Territory Name:</label>
                            <input type="text" name="territory_name" class="form-control" placeholder="Enter the name of the territory" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Territory district:</label>
                            <input type="text" name="territory_district" class="form-control" placeholder="Enter the district of the territory" required>
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