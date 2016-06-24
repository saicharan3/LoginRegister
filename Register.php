<?php
    $con=mysqli_connect("http://backloggers3.net23.in","a4794786_BUNNY","Bhargavi987","a4794786_OUFEED");
    
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];
    
    $statement = mysqli_prepare($con, "INSERT INTO a4794786_BUNNY (email,username,password, rpassword) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "siss", $email, $username, $password, $rpassword);
    mysqli_stmt_execute($statement);
    $response = array();
    $response["success"] = true;  
     
    echo json_encode($response);
    mysqli_stmt_close($statement);
    
    mysqli_close($con);
?>
