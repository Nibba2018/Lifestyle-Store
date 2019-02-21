<?php
    require "./includes/common.php";
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id']
    $query = "insert into user_items(user_id,item_id,status) values($user_id,$item_id,'Added to cart')";
    mysqli_query($con,$query);
    header("location:products.php"); 
?>