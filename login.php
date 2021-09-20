<?php
	require "./includes/common.php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Welcome to Login</title><!-- comment -->
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
                   
           <div class="panel-group col-xs-6">
             
                 <div class="panel panel-primary ">
                     <div class="panel-heading">
                        <h4>LOGIN</h4><!-- comment -->
                     </div>
                    <div class="panel-body text-danger">
                        <p>Login to make a PURCHASE</p><!-- comment -->
                                <form method="POST" action="login_submit.php">
                                            <div class="form-group"><!-- comment -->
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                                            </div><!-- comment -->
                                            
                                           <div class="form-group">
                                                       <input type="password" name="pw" id="password" class="form-control" placeholder="Password" required="required">
                                            </div>
                                            
                                           <button type="submit" class="btn btn-primary">Login</button>
                              </form><!-- comment -->
                    </div>
                   <div class="panel-footer">
                       Don't have an account?<a href="signup.php" class="text-primary">Register</a><!-- comment -->
                   </div>
                  
                       
                </div>
    </div>
                      
        
                       <div class="footer">
                            <center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</center>
                       </div>
        


 </body>
</html>
       
  

