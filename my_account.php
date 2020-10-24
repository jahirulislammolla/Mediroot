<?php
  require 'session_required.php';
  require 'connection.php';

  $id = $_SESSION['id'];
  
  //svar_dump($_SESSION);


  
  
  if(isset($_POST['submitone']))
  {
    
    $user_email = $_POST['admin_email'];
    
    if($user_email)
    {
    	$user->resetEmailAdmin($user_email,$id);
    	header("location:logout.php");
    }
   }

  if(isset($_POST['submittwo']))
  {
    
    $user_password = $_POST['admin_password'];
    $user_password_check = $_POST['admin_password_check'];

    
    if($user_password == $user_password_check)
    {
    	if($user_password AND $user_password_check)
    	{
    		$user->resetPasswordUser($user_password,$id);
    		aheader("location:logout.php");
    	}
    	
    }
    else
    {
    	echo "Confirmation doesn't match!";
    }
   }

?>


<!DOCTYPE html>
<html>
<head>
  <title>My Account</title>
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
  <?php include 'manager_navbar.php'; ?>
        <div class="container">
                <div class="note">
                    <h1 class="text-center"> Welcome! Manage Your Account</h1>
                    
                    <div class="col-md-6">
                    	<h3 class="text-center"> Change Email </h3>
                        <form method="POST" enctype="multipart/form-data">

                          <div class="form-group">
                            <label for="exampleTextarea">Email:</label>
                            <input type="email" name="admin_email" class="form-control" value="<?php echo $_SESSION['email']; ?>" required>
                          </div>

                          <button type="submit" class="btn btn-primary" input type="submit" name="submitone">Submit</button><br><br>
                      </form>
                  	</div>

                  	 <div class="col-md-6">
                    	<h3 class="text-center"> Change Password </h3>
                        <form method="POST" enctype="multipart/form-data">

                          <div class="form-group">
                            <label for="exampleTextarea">Password:</label>
                            <input type="password" name="admin_password" class="form-control" placeholder="Enter new password" " required>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea">Retype Password:</label>
                            <input type="password" name="admin_password_check" class="form-control" placeholder="Confirm password" required>
                          </div>

                          <button type="submit" class="btn btn-primary" input type="submit" name="submittwo">Submit</button><br><br>
                      </form>
                  	</div>

                        
                </div>
        </div>
 

        <script src="js/jquery.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script type="text/javascript">
          $( document ).ready(function() {
            $("#my_account").addClass("active");
          });       
        </script>         
                
        <script src="js/bootstrap.min.js"></script>


</body>
</html>