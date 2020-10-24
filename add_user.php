<?php
  require 'session_required.php';
  require 'connection.php';
  


  
  
  if(isset($_POST['submit']))
  {
    
    
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    
    $check = $user->matchUser($user_email);
    //var_dump($check);

    if(empty($check))
    {
      if ($user_email AND $user_password)
      {
        $user->addUser($user_email,$user_password);
        header("location:users.php");
      }
      else
      {
        echo "Enter the fields";
      }
    }
    else
    {
      echo "This Email already exists in the list";
    }
    
    
   
  }

?>


<!DOCTYPE html>
<html>
<head>
  <title>Add User</title>
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
                    
                        <h2>Add User</h2>
                        <hr>

                        <form method="POST" enctype="multipart/form-data">

                          

                          <div class="form-group">
                            <label for="exampleTextarea">User Email:</label>
                            <input type="email" name="user_email" class="form-control" placeholder="Enter the email of the user" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">User Password:</label>
                            <input type="text" name="user_password" class="form-control" placeholder="Choose a Password for him" required>
                          </div>

                          

                          
                          

                          
                          
                          
                          <button type="submit" class="btn btn-primary" input type="submit" name="submit">Submit</button><br><br>
                      </form>

                        
                </div>
        </div>
 

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
          $( document ).ready(function() {
            $("#events_admin_2").addClass("active");
          });       
        </script>         
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>