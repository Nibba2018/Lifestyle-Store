<?php
    require "./includes/common.php";
    $email = mysqli_real_escape_string($con,$_POST["e-mail"]);
    $password = md5($_POST["password"]);
    $Login_Query = "select id,email from users where email = $email and password = $password";
    $selectAll = mysqli_query("select * from users",$con);
    $result = mysqli_query($Login_Query);

    if(mysqli_num_rows($selectAll) == 0)
        echo"Sorry no users found";
    else
        $arr = mysqli_fetch_array($result,MYSQLI_BOTH);
    
    $_SESSION["email"] = $result["email"];
    $_SESSION["user_id"] = $result["id"];

    header("location:products.php");
?>