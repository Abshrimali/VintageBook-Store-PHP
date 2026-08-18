<?php
session_start();
?>
<?php
$conn = mysqli_connect("localhost","root","","vintage_book");
$login_id = $_SESSION["login_id"];
$q = mysqli_query($conn, "SELECT * FROM `user_login` WHERE id = '$login_id'");
$row = mysqli_fetch_array($q);
?>

<?php
if (!isset($_SESSION["login_id"])) {
    echo '<script>window.location.href="index.php"</script>';
}
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php
include "header.php"
?>

<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Personal Information</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <section class="product_description_area">
        <div class="container">
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane  show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                    <div class="row">
                        <div class="login">
                            <div class="container shadow p-3 mb-5 bg-white rounded col-md-11 m-5 p-5">
                                <div class="row">
                                    <div class="">
                                        <div class="billing">
                                            <!-- <div class="checkout_title text-center"><h2>Personal Informations</h2></div> -->
                                            <div class="login_form_container">
                                                <form id="personal_information_form" class="login_form" method="post">
                                                    <div>
                                                        <br>
                                                        <!-- Name -->
                                                        <div class="login-text p-b-10" style="color: black;">Name
                                                        </div>
                                                        <input type="text" name="first_name" id="change_name" value="<?php echo $row[1] ?>" class="checkout_input form-control" placeholder="Name">
                                                    </div>
                                                    <div>
                                                        <!-- Surname -->
                                                        <br>
                                                        <div class="login-text p-b-10" style="color: black;">
                                                            Surname
                                                        </div>
                                                        <input type="text" name="last_name" id="change_surname" value="<?php echo $row[2] ?>" class="checkout_input form-control" placeholder="Surname">
                                                    </div>
                                                    <div>
                                                        <br>
                                                        <!-- Email -->
                                                        <div class="login-text p-b-10" style="color: black;">E-Mail
                                                            Address
                                                        </div>
                                                        <input type="email" name="email" id="change_email" value="<?php echo $row[3] ?>" class="checkout_input form-control" placeholder="E-Mail">
                                                    </div>

                                                    <div>
                                                        <br>
                                                        <!-- Birth Date -->
                                                        <div class="login-text p-b-10" style="color: black;">Current Password
                                                        </div>
                                                        <input type="text" name="c_password" id="change_birthdate" required class="checkout_input form-control date" placeholder="Old Password">
                                                    </div>
                                                    <div>
                                                        <br>
                                                        <!-- Birth Date -->
                                                        <div class="login-text p-b-10" style="color: black;"> New Password
                                                        </div>
                                                        <input type="text" name="password" id="change_birthdate" required class="checkout_input form-control date" placeholder="New Password">
                                                    </div>

                                                    <div><!--ERROR--></div>
                                                    <br>
                                                    <input class="login_button" type="submit" value="Update" name="submit">
                                                </form>
                                            </div>
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
<?php
include("footer.php")
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


<!-- Profile Update -->
<?php
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    // $img_name = $_FILES['p_img']["name"];
    // $img_location = $_FILES['p_img']["tmp_name"];

    $data = mysqli_query($conn, "SELECT * FROM `user_login`");
    $id = mysqli_fetch_array($data);
    if ($id[4] == $c_password) {
        // move_uploaded_file($img_location, "img/" . $img_name);
        $q = mysqli_query($conn, "UPDATE `user_login` SET `Name`='$first_name',`Last_Name`='$last_name',`Email`='$email',`Pass`='$password' WHERE  id = '$id[0]'");
        if ($q) {
            $_SESSION['profile_updated'] = "Profile Updated";
        } else {
            $_SESSION['profile_updated'] = "Some thing went wrong";
        }
    } else {
?>
        <!--begin::Alert-->
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Incrroct password!'
            });
        </script>
<?php
    }
}
?>

<!-- Profile Update alert Start -->
<?php
if (isset($_SESSION['profile_updated'])) {
?>
    <!--begin::Alert-->
    <script>
        Swal.fire(
            'Good job!',
            '<?php echo $_SESSION['profile_updated'] ?>!',
            'success'
        );
    </script>

<?php
    unset($_SESSION['profile_updated']);
};
?>
<!-- Profile Update alert End -->