<?php
	require './includes/common.php';
	// check  if logged in
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"><!-- comment -->
        <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1"><!-- comment -->
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
       
		<?php
			require './includes/header.php';
		?>
       
        
        <div class="details">
            <div class="row">
                <form action="settings_script.php" method="POST">
                        <div class="form-group col-xs-4"><!-- comment -->
                             <h1>Change Password</h1>
                             <input type="password" class="form-control" name="old_pass" placeholder="Old password"><br><!-- comment -->
                             <input type="password" class="form-control" name="new_pass" placeholder="New password"><br>
                             <input type="password" class="form-control" name="retype_new_pass" placeholder="Re-type New password"><br>
                             <button type="button" class="btn btn-primary btn-lg">Change</button>
                        </div><!-- comment -->
                 </form>
            </div>
        </div>
                     <?php
                     require './includes/footer.php';
                     ?>
                      
      </body><!-- comment -->
  </html>

