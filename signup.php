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
</head>
<body>
    <!-- header/navbar -->
    <?php
        include "./includes/header.php";
    ?>

    <div class="container gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <p><h1><strong>SIGN UP</strong></h1></p>
                        <form action="signup_script.php" method="post">
                            <div class="form-group">
                                <input type="name" class="form-control" placeholder="Name" name="name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="e-mail" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                            </div>
                            <div class="form-group">
                                <input type="contact" class="form-control" placeholder="Contact" name="contact" required="true">
                            </div>
                            <div class="form-group">
                                <input type="city" class="form-control" placeholder="City" name="city" required="true">
                            </div>
                            <div class="form-group">
                                <input type="address" class="form-control" placeholder="Address" name="address" required="true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">SIGN UP</button><br><br>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container gap"></div>
    <!-- footer -->
    <?php
        include "./includes/footer.php";
    ?>
</body>
</html>