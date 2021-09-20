<?php
    require './includes/common.php';
    // check if signed in
    if(!isset($_SESSION["email_id"])){
        header("location: index.php");
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
        <?php
            

            // check all items to confirmed
            $user_id = $_SESSION["id"];
            $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            
            while($row = mysqli_fetch_array($result)){
                $item_id = $row["item_id"];
                $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
                
                $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
            }
        ?>
        <div class="success">
            <center>
            <h1><b> Your Order is Confirmed</b></h1><br><br><!-- comment -->
            <p> <strong>THANK YOU</strong>,for Shopping With us.</p> <br><!-- comment -->
            <a href="products.php" class="btn btn-success btn-sm"> Click here </a> , to purchase any other item.
            </center>
            
        </div>
    </body>
</html>
