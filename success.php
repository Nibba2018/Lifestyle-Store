<?php
    require "./includes/common.php";
    if(!isset($_SESSION['email']))
    {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lifestyle Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style/style.css">
    <style>
        .gapf
        {
            padding: 2%;
        }
    </style>
</head>
<body>
    <!-- header/navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container gap"></div>
    <div class="container">
        <div class="jumbotron">
            <h1><strong><span class="success">Your order is confirmed!!</span></strong></h1>
            <h3>Thank You for shopping with us.</h3><br>
            <h4><a href="products.php">Click here</a> to continue Shopping.</h4>
        </div>
    </div>
    <div class="container gap"></div>
    <div class="container gapf"></div>

    <!-- footer -->
    <footer>
        <div class="container">
            <center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
        </div>
    </footer>
</body>
</html>