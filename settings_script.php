<?php
    require "./includes/common.php";
    if(!isset($_SESSION['email']))
    {
        header('location:index.php');
    }
    $re_pass = md5($_POST['password']);
    $new_pass = md5($_POST['new-password']);
    $password = md5($_POST["old-password"]);
    if(strlen($re_pass) != strlen($new_pass))
        echo"New password and retyped passwords are not the same";
    else
        $result = mysqli_query($con,"select password from users where password = $password");
        if(mysqli_num_rows($result))
            mysqli_query($con,"update users set password = $re_pass where password = $password");
        else
            echo"Wrong old Password Entered";
?>