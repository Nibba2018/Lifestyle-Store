<?php
    require "./includes/common.php";
    $email = $_POST["e-mail"];
    $name = $_POST["name"];
    $password = md5($_POST["password"]);
    $contact = $_POST["contact"];
    $city = $_POST["city"];
    $address = $_POST["address"];

    $insert_query = "insert into users values('',$name,$email,$password,$contact,$city,$address)";
    $dupe_check ="select email from users where email = $email";
    $dupe_res = mysqli_query($con,$dupe_check);

    if(mysqli_num_rows($dupe_res))
        echo"Email ID already exits";
    else
        mysqli_query($con,$insert_query);
        mysqli_insert_id($con);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = mysqli_query($con,"select id from users where email = $email"))['id'];

    header("location:products.php");
?>