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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Bootstrap -->


    <link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/checkout.css">
    <!-- <link rel="stylesheet" type="text/css" href="styles/profile.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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


<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Contact us for query</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Section: Contact v.2-->
<div class="container">
    <section class="product_description_area">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane  show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="login">
                                <div class="container shadow p-3 mb-5 bg-white rounded col-md-11 m-5 p-5">
                                    <!-- <div class="d-flex flex-column text-center mb-5">
                                        <h3 class="text-primary mb-3 text-danger">Contact Us</h3>
                                    </div> -->
                                    <div class="row">
                                        <div class="login_form_container">
                                            <form id="personal_information_form" class="login_form" method="post">
                                                <div>
                                                    <br>
                                                    <!-- Name -->
                                                    <div class="login-text p-b-10" style="color: black;">Name:
                                                    </div>
                                                    <input type="text" name="name" id="change_name" value="" class="checkout_input form-control" placeholder="Name" required>
                                                </div>
                                                <div>
                                                    <!-- Surname -->
                                                    <br>
                                                    <div class="login-text p-b-10" style="color: black;">
                                                        Email:
                                                    </div>
                                                    <input type="email" name="email" id="change_surname" value="" class="checkout_input form-control" placeholder="Email" required>
                                                </div>
                                                <div>
                                                    <br>
                                                    <!-- Phone -->
                                                    <div class="login-text p-b-10" style="color: black;">Phone:
                                                    </div>
                                                    <input type="number" name="phone" id="change_email" value="" class="checkout_input form-control" placeholder="Phone" required>
                                                </div>


                                                <div>
                                                    <br>
                                                    <div class="login-text p-b-10" style="color: black;"> Your Message:
                                                    </div>
                                                    <textarea placeholder="Your Message..." class="checkout_input form-control date" name="text-area" id="" cols="30" rows="10" required></textarea>
                                                    <!-- <input type="text" name="password" id="change_birthdate" required  placeholder="New Password"> -->
                                                </div>

                                                <div><!--ERROR--></div>
                                                <br>
                                                <input class="login_button" type="submit" value="Submit" name="submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </section>
</div>
<!--Section: Contact v.2-->

<?php
include("footer.php");
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



if (isset($_POST['submit'])) {

    $name;
    if (isset($_SESSION["user_name"])) {
        $name = $_SESSION["user_name"];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['text-area'];
        $data = mysqli_query($conn, "INSERT INTO `contact_us`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')");
        if ($data) {
            echo "<script>
                Swal.fire(
                    'Thank you!',
                    'Your Message has been sent',
                    'success'
                );
                  </script>";
        }
    } else {
        echo "<script>
                Swal.fire(
                    'Sorry!',
                    'login First!',
                    'warning'
                );
                  </script>";
    }
}



?>