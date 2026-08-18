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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="shortcut icon" href="images/logo/3-removebg-preview.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo/3-removebg-preview.png" type="image/x-icon">


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

<div class="login ">
    <div class="container">
        <div class="row ">
            <div class="col-md-2 align-self-left"></div>
            <div class="col-md-8 m-5 align-self-center">
                <div class="billing">

                    <div class="login_title">Register</div>
                    <div class="login_form_container">
                        <form id="login_form" class="login_form" method="POST">
                            <div>
                                <!-- Name -->
                                <div class="login-text p-b-10" style="color: black;">Name</div>
                                <input type="text" name="name" id="register_name" class="login_input form-control" required="required">
                            </div>
                            <div>
                                <!-- Surname -->
                                <div class="login-text p-b-10" style="color: black;">Surname</div>
                                <input type="text" name="last_name" id="register_surname" class="login_input form-control" required="required">
                            </div>
                            <div>
                                <!-- Email -->
                                <div class="login-text p-b-10" style="color: black;">E-Mail Address</div>
                                <input type="email" name="email" id="register_email" class="login_input form-control" required="required">
                            </div>
                            <div>
                                <!-- Password -->
                                <div class="login-text p-b-10" style="color: black;">Password</div>
                                <div class="input-group">
                                    <input type="password" name="pass" id="register_password" class="login_input form-control pwd" required="required">
                                    <!--<div class="input-group-append">-->
                                    <!--    <span class="input-group-text show_password_bg">-->
                                    <!--        <button class="btn btn-default reveal" type="button"><i class="fa fa-eye" id="eye"></i></button>-->
                                    <!--    </span>-->
                                    <!--</div>-->
                                </div>
                                <div>
                                    <span>*Your password must be 8-16 characters, and include at least one
                                        lowercase letter, one uppercase letter, and a number.</span>
                                </div>
                            </div>
                          
                            <div><!--ERROR--></div>
                            <div><input type="submit" name="submit" class="login_button trans_200" value="Register"></div>
                            <div class="text-center login-text">Already have an account? <a href="login.php" class="login-text register-text">Login</a>
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
$conn = mysqli_connect("localhost","root","","vintage_book");
$conn;

if(isset($_POST['submit'])){
    $f_name = $_POST['name'];
    $l_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $data = mysqli_query($conn, "SELECT * FROM `user_login` WHERE `Name` = '$f_name' && `Email` = '$email'");
    $check= mysqli_num_rows($data);
    if ($check == 1) 
    {
          echo "<script>
            Swal.fire(
                'OOps!',
                'Account Already Registered With this Email!',
                'error'
            );
              </script>";
    }
    else
    {
        $q = mysqli_query($conn, "INSERT INTO `user_login`(`id`, `Name`, `Last_Name`, `Email`, `Pass`) VALUES ('','$f_name','$l_name','$email','$password')");
        if ($q == 1) {
            echo "<script>
            Swal.fire(
                'Thank you!',
                'Account Created Successfully!',
                'success'
            );
              </script>";
           
        } else {
            echo "<script>
            Swal.fire(
                'Sorry!',
                'Something went wrong!',
                'warning'
            );
              </script>";
        
        }
    }
    
    {
        
    } 
   
}



?>

