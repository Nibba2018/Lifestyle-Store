<?php
    require "./includes/common.php";
    if(!isset($_SESSION['email']))
    {
        header('location:login.php');
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
    <?php
        include "./includes/header.php";
    ?>

    <div class="container gap"></div>
    <div class="container col-xs-4 col-xs-offset-4">
        <table class="table table-striped table-bordered">
            <tbody>
                <tr><th><center>Item Number</center></th><th><center>Item Name</center></th><th><center>Price</center></th><th><center> </center></th></tr>
                <tr><td><center>    </center></td><td><center>  </center></td><td><center>  </center></td></tr>
                <tr><td><center>    </center></td><td><center>Total</center></td><td><center>Rs.0/-</center></td><td><center><a href="success.php"><button type="submit" name="submit" class="btn btn-primary">Confirm Order</button></a></center></td></tr>
            </tbody>
        </table>
    </div>
    <div class="container gap"></div>
    <div class="container gap"></div>
    <div class="container gap"></div>
    <div class="container gapf"></div>

    <!-- footer -->
    <?php
        include "./includes/footer.php";
    ?>
    
</body>
</html>