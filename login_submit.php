<?php
    require "./includes/common.php";
    $email = mysqli_real_escape_string($conn,filter_input(INPUT_POST,"email"));
    $password = mysqli_real_escape_string($conn,filter_input(INPUT_POST,"password"));
    $hashed_password = md5($password);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$hashed_password'";
    $query_result = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_result) == 0){
        echo "<h1><center> OOPS..!!!</h1><h3><center>User Account doesn't exists.</h3></center>";
    }else{
        $row = mysqli_fetch_array($query_result);
        $_SESSION["email_id"] = $email;
        $_SESSION["id"] = $row["id"];

        // redirect to products page
        header("location: products.php");
    }
?>
