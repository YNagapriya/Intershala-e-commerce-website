<?php
	// if already logged in, go to products page
	if(isset($_SESSION["email_id"])){
		header("location: products.php");
	}

	require "./includes/common.php";
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
       
        <?php
           require './includes/header.php';
        ?>
            
         <div class="content">
                <div class="banner_image">
                    <div class="inner_banner_image">
                        <div class="banner_content">
                            <h1>We sell lifestyle</h1>
                            <p>Flat 40% OFF on premium brands</p>
                            <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
                 
                 <?php
                   include './includes/footer.php';
                   ?>
          
    </body>
</html>