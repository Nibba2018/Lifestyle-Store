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
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <p><h1><strong>Change Password</strong></h1></p>
                        <form method="post" action="settings_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="old-password" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password" name="new-password" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password" name="password" required="true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button><br><br>
                        </form><br>
                    </div>
                </div>
            </div>
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