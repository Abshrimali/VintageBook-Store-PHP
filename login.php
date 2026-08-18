<?php
session_start();
?>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vintage Books</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- <link rel="stylesheet" type="text/css" href="styles/core-style.css"> -->
    <link rel="stylesheet" type="text/css" href="styles/util.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo/3-removebg-preview.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php
include("header.php");
?>

<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-2 align-self-left"></div>
            <div class="col-md-8 align-self-center">
                <div class="billing">

                    <div class="login_title">Login</div>
                    <div class="login_form_container">
                        <form id="login_form" class="login_form" method="POST">

                            <div>
                                <!-- Email -->
                                <div class="login-text p-b-10" style="color: black;">E-Mail Address</div>
                                <input type="email" name="email" class="login_input form-control" required="required">
                            </div>

                            <div>
                                <!-- Password -->
                                <div class="login-text p-b-10" style="color: black;">Password</div>
                                <input type="password" name="pass" class="login_input form-control" required="required">
                            </div>
                    </div>
                    <div class="login_extra">
                        <ul>
                            <li class="billing_info d-flex flex-row">

                                <!-- <div style="alignment: center">
                                    <a href="forgot-password.html" class="login-text register-text">Forgot
                                        Password</a>
                                </div> -->
                            </li>
                        </ul>
                    </div>
                    <div><!--ERROR--></div>
                    <div class="p-b-10"><input type="submit" name="login" class="login_button trans_200" value="login"></a></div>
                    <div class="text-center login-text">Don't have an account? <a href="register.php" class="login-text register-text">Register</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2 align-self-right"></div>
    </div>
    </div>
</div>

<?php
include "footer.php";
?>


<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="js/bxslider.min.js"></script>
<script type="text/javascript" src="js/script.slider.js"></script>
</body>

</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "vintage_book");
$conn;
if (isset($_POST['login'])) {

    $h_email = $_POST['email'];
    $password = $_POST['pass'];

    $data = mysqli_query($conn, "SELECT * FROM `user_login` WHERE Email = '$h_email' && Pass = '$password' ;");
    $arr = mysqli_fetch_array($data);
    if (mysqli_num_rows($data) > 0) {
        $_SESSION["login_id"] = $arr[0];
        $_SESSION["user_name"] = $arr[1];
        $_SESSION["user_email"] = $arr[3];
        // $_SESSION["user_profile"] = $arr[5];
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "<script>
            Swal.fire(
                'Sorry!',
                'Email or Password Incorrect..!',
                'warning'
            )
        </script>";
    }
}

?>
