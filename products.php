<?php
    require "./includes/common.php";
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
        .gap
        {
            padding: 3%;
        }
    </style>
</head>
<body>
    <div class="container gap"></div>
    <!-- header/navbar -->
    <?php
        include "./includes/header.php";
        include "./includes/check_if_added.php"; 
    ?>
    <div class="container">
        <div class="jumbotron">
            <h1><strong>Welcome to our Lifestyle Store!</strong></h1>
            <h4>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</h4>
        </div>
    </div>

    <div class="container">
        <div class="row"> <!--Cameras-->
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/camera.jpg" alt="resposive">
                <center>
                <h2><strong>Cannon EOS</strong></h2>
                <h4>Price: Rs 36000.00</h4>
                
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(1))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/camera.jpg" alt="resposive">
                <center>
                <h2><strong>Sony DSLR</strong></h2>
                <h4>Price: Rs 40000.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(2))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/camera.jpg" alt="responsive">
                <center>
                <h2><strong>Sony DSLR</strong></h2>
                <h4>Price: Rs 50000.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(3))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/camera.jpg" alt="responsive">
                <center>
                <h2><strong>Olympus DSLR</strong></h2>
                <h4>Price: Rs 80000.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(4))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
        <div class="row"> <!--Watches-->
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/watch.jpg" alt="resposive">
                <center>
                <h2><strong>Titan Model #301</strong></h2>
                <h4>Price: Rs 13000.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(5))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/watch.jpg" alt="resposive">
                <center>
                <h2><strong>Titan Model #201</strong></h2>
                <h4>Price: Rs 3000.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(6))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/watch.jpg" alt="responsive">
                <center>
                <h2><strong>HMT Milan</strong></h2>
                <h4>Price: Rs 8000.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(7))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/watch.jpg" alt="responsive">
                <center>
                <h2><strong>Faber Luba #111</strong></h2>
                <h4>Price: Rs 18000.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(8))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
        </div>
        <div class="row"> <!--Shirts-->
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/shirt.jpg" alt="resposive">
                <center>
                <h2><strong>H&W</strong></h2>
                <h4>Price: Rs 800.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(9))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/shirt.jpg" alt="resposive">
                <center>
                <h2><strong>Luis Phil</strong></h2>
                <h4>Price: Rs 1000.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(10))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/shirt.jpg" alt="responsive">
                <center>
                <h2><strong>John Zok</strong></h2>
                <h4>Price: Rs 1500.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(11))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
            <div class="col-md-3 col-sm-6 thumbnail">
                <img src="./images/shirt.jpg" alt="responsive">
                <center>
                <h2><strong>Jhalsani</strong></h2>
                <h4>Price: Rs 1300.00</h4>
                <?php
                    if(!isset($_SESSION['email']))
                    {
                ?>
                
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                
                <?php
                    } else 
                    {
                        if(check_if_added_to_cart(12))
                        {
                            echo'<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        }
                        else
                        { 
                ?>
                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php
                        }
                    }
                ?>
                </center>
            </div>
        </div>
        </div>
    </div>

    <!-- footer -->
    <?php
        include "./includes/footer.php";
    ?>
</body>
</html>