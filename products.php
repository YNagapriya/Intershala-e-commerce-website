<?php
	require './includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Lifestyle Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"><!-- comment -->
        <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1"><!-- comment -->
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
       
                <?php
			require './includes/header.php';
			require './includes/check_if_added.php';
		?>
        
        <div class="cart">
            <div class="jumbotron">
                <center>
                <h1><b>Welcome to our Lifestyle Store!</b></h1><!-- comment -->
                <p>We have the best Cameras,Watches,Shirts for you.No need to hunt around,we have all in one place.</p>
                </center>
            </div>
      
      
         <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                       <img src="images/5.jpg" alt="cameras"><!-- comment -->
                        <div class="caption">
                            <h3>Cannon EOS</h3><!-- comment -->
                            <p>Price:Rs.36000.00</p><!-- comment -->
                            <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=1" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                        </div>
                   </div>
            </div>
                    <div class="col-md-3 col-sm-6">
                         <div class="thumbnail">
                              <img src="images/2.jpg" alt="cameras"><!-- comment -->
                              <div class="caption">
                                   <h3>Sony DSLR</h3><!-- comment -->
                                   <p>Price:Rs.40000.00</p><!-- comment -->
                                   <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(2)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=2" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                              </div>
                           </div>
                    </div><!-- comment -->
                    <div class="col-md-3 col-sm-6">
                                 <div class="thumbnail">
                                   <img src="images/3.jpg" alt="cameras"><!-- comment -->
                                   <div class="caption">
                                         <h3>Sony DSLR</h3><!-- comment -->
                                          <p>Price:Rs.50000.00</p>
                                          <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=3" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
                     <div class="col-md-3 col-sm-6">
                             <div class="thumbnail">
                                   <img src="images/4.jpg" alt="cameras"><!-- comment -->
                                   <div class="caption">
                                            <h3>Olympus DSLR</h3><!-- comment -->
                                             <p>Price:Rs.80000.00</p><!-- comment -->
                                              <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=3" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                                     </div>
                               </div>
                    </div><!-- comment -->
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/6.jpg" alt="watches"><!-- comment -->
                    <div class="caption">
                        <h3>TitanModel#301</h3><!-- comment -->
                        <p>Price:Rs.13000.00</p><!-- comment -->
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=5" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                   </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/7.jpg" alt="watches"><!-- comment -->
                    <div class="caption">
                        <h3>TitanModel #201</h3><!-- comment -->
                        <p>Price:Rs.3000.00</p><!-- comment -->
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(6)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=6" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                   </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/8.jpg" alt="watches"><!-- comment -->
                    <div class="caption">
                        <h3>HMT Milan</h3><!-- comment -->
                        <p>Price:Rs.8000.00</p><!-- comment -->
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(7)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=7" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                   </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/9.jpg" alt="cameras"><!-- comment -->
                    <div class="caption">
                        <h3>Faber Luba#111</h3><!-- comment -->
                        <p>Price:Rs.18000.00</p><!-- comment -->
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(8)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=8" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                   </div>
            </div>
            
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/10.jpg" alt="shirts"><!-- comment -->
                    <div class="caption">
                        <h3>H&W</h3><!-- comment -->
                        <p>Price:Rs.800.00</p><!-- comment -->
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(9)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=9" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                   </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/11.jpg" alt="shirts"><!-- comment -->
                    <div class="caption">
                        <h3>Luis Phil</h3><!-- comment -->
                        <p>Price:Rs.1000.00</p><!-- comment -->
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(10)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=10" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                   </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/12.jpg" alt="shirts"><!-- comment -->
                    <div class="caption">
                        <h3>John Zok</h3><!-- comment -->
                        <p>Price:Rs.1500.00</p><!-- comment -->
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(11)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=11" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                   </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="images/13.jpg" alt="shirts"><!-- comment -->
                    <div class="caption">
                        <h3>Jhalsani</h3><!-- comment -->
                        <p>Price:Rs.1300.00</p><!-- comment -->
                        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(12)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart_add.php?id=12" name="add" value="add" class"btn btn-primary">Add to cart</a>
									<?php }
								} ?>
                    </div>
                   </div>
            </div>
        </div>
      </div>
        <?php
           require './includes/footer.php';
        ?>
    </body><!-- comment -->
</html>