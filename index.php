<?php
    require "./includes/common.php";
    if(isset($_SESSION['email']))
    {
        header('location:products.php');
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
            padding: 1%;
        }
    </style>
</head>
<body>
    <div class="container gapf"></div>
    <!-- Header -->
    <?php
        include "./includes/header.php";
    ?>

    <div id="banner_image">
        <center>
            <div class="container">
            <div id="banner_content">
                <h1>We Sell lifestyle</h1>
                <p>Flat 40% OFF on premium brands</p>
                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </center>
        </div>
    </div>
    
    <!-- Footer -->
    <?php
        include "./includes/footer.php";
    ?>
    
</body>
</html>
