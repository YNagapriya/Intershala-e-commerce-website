<?php
	require './includes/common.php';
	
	// destroy the session if present
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}else{
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"><!-- comment -->
        <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1"><!-- comment -->
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
        
        <div class="text-center">
            <div class="alert alert-success">
                <center>
                <h1>You have successfully logged out.</h1> <br> Click <a href="index.php">here</a> to go back to index page.
                </center>
            </div>
        </div>
		
	</body>
</html>
