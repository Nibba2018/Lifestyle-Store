<?php
    require "./includes/common.php";
    $user_id = $_SESSION['id'];
    $item_id = $_GET['id'];
    $query = "delete from user_items where user_id = $user_id and item_id = $item_id";
    mysqli_query($con,$query);
    header("location:cart.php");
?>