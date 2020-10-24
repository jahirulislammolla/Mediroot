<?php
        require 'session_required.php';
        require 'connection.php';
        
        $terr = $user->getAllUsers();
        


        

        


?>

<!DOCTYPE html>
<html>
<head>
  <title>Manager List</title>
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
                <h3 class="text-center"> Manager's List </h3>
                        <hr>
                        <table class="table">
                          <thead class="thead-dark">
                            <tr >
                              <th class="text-center" scope="col">Sl. No</th>
                              
                              
                              <th class="text-center" scope="col">Email</th>
                              
                              <th class="text-center" scope="col">Action</th>
                              
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                                <?php foreach ($terr as $row) { ?> 
                            <tr>
                                
                                        
                               
                              <th class="text-center" scope="row"><?php echo $row['user_id']; ?></th>
                              
                              <td class="text-center"><?php echo $row['user_email']; ?></td>
                              
                              <td class="text-center"><button class="btn btn-warning" onclick="window.location.href='delete_user.php?id=<?php echo $row['user_id'] ;?>'">Delete</button></td>
                              
                              
                              

                             
                              
                              
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
            $("button").on("click",function(e){
              var value=$(this).attr("id");
              if (typeof(value) != "undefined")
              {
                var value=value.split("_");
                if (value[0]==="delete")
                {
                  if(window.confirm("Are you delete this territory?"))
                 {
                  window.location.href="delete_territory.php?id="+value[1];
                 }
                 else{e.preventDefault();}
                }
                 
              }
            });
            $('#events_admin_2').addClass('active');
        });      
        </script>       
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>