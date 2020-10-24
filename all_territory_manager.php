<?php
        require 'session_required.php';
        require 'connection.php';
        
        $terr = $user->getAllTerritory();
        if(isset($_POST['submited']))
        {
          

          $territory_name = $_POST['territory_name'];
          $terr = $user->getTerritory($territory_name);
          //var_dump($invoices);

          
        }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Territory List</title>
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
        <div class="container">
                <br>
                <div class="note">
                  <div class="row">
                    
                      <form class="form-inline text-center" role="form" method="POST">
                        
                        <div class="form-group">
                          <label for="pwd">Search Territory:</label>
                          <input type="text" class="form-control" id="pwd" name="territory_name" placeholder="Enter territory">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" input type="submit" name="submited">Search</button>
                      </form>
                    

                    
                        
                  </div>
                </div>
                        <hr>
                        <table class="table">
                          <thead class="thead-dark">
                            <tr >
                              <th class="text-center" scope="col">Sl. No</th>
                              
                              
                              <th class="text-center" scope="col">Territory</th>
                              <th class="text-center" scope="col">District</th>
                              <th class="text-center" scope="col">Add Date</th>
                              <th class="text-center" scope="col">Action</th>
                              
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                                <?php foreach ($terr as $row) { ?> 
                            <tr>
                                
                                        
                               
                              <th class="text-center" scope="row"><?php echo $row['territory_id']; ?></th>
                              
                              <td class="text-center"><?php echo $row['territory_name']; ?></td>
                              <td class="text-center"><?php echo $row['territory_district']; ?></td>
                              <td class="text-center"><?php echo $row['territory_add_date']; ?></td>
                              
                              
                              <td class="text-center"><button class="btn btn-success" onclick="window.location.href='territory_sales_manager.php?id=<?php echo $row['territory_id'] ;?>'">Details</button>  </td>

                             
                              
                              
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
            $('#all_territory_manager').addClass('active');
        });      
        </script>       
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>