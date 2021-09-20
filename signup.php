<?php
	if(isset($_SESSION["id"])){
		header("location: products.php");
	}
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SIGNUP</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"><!-- comment -->
        <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1"><!-- comment -->
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
       
        <?php
			require "./includes/header.php";
		?>
        
        <div class="details">   
            <div class="row">
               <form method='POST' action = "signup_script.php">
                        <div class="form-group col-xs-4"><!-- comment -->
                             <h1>SignUp</h1>
                             <input type="text" class="form-control" name="name" placeholder="Name" required = "true" ><br><!-- comment -->
                             <input type="email" class="form-control" name="email" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                             <input type="password" class="form-control" name="pw" placeholder="Password" required = "true" pattern=".{6,}"><br>
                             <input type="integer" class="form-control" name="contact" placeholder="Contact"><br>
                             <input type="text" class="form-control" name="city" placeholder="City"><br>
                             <input type="text" class="form-control" name="address" placeholder="Address"><br>
                             <button type="submit" class=" btn btn-primary btn-lg" value="registration_submit">Submit</button>
                        </div>
                    </form>
                 </div>
        </div>
        
                   <?php
                    require './includes/footer.php';
                    ?>
       
</body><!-- comment -->
</html>