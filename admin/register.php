<?php
include "../connection.php";

?>
<!DOCTYPE html>
<html lang="en">


<!-- register24:03-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Vintage Admin Register</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form method="post"  class="form-signin">
						<div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="admin_username">
                            <span id="name_error"></span>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="admin_email">
                            <span id="mail_error"></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="admin_password">
                            <span id="pass_error"></span>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" name="admin_contact">
                            <span id="contact_error"></span>
                        </div>
                        <!-- <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div> -->
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary account-btn" type="submit" name="singup" value="Signup">
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="login.php">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- register24:03-->
</html>
<?php
if(isset($_POST['singup']))

{
    $admin_username = $_POST['admin_username'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $admin_contact = $_POST['admin_contact'];
    if($admin_username=== "")
    {
        echo '<script>
        var error=document.getElementById("name_error");
        error.innerHTML="Please Enter Name";
        error.style.color="red";
    </script>';
    }
   
    if($admin_email=== "")
    {
        echo '<script>
        var error=document.getElementById("mail_error");
        error.innerHTML="Please Enter Email";
        error.style.color="red";
    </script>';
    }

    if($admin_password=== "")
    {
        echo '<script>
        var error=document.getElementById("pass_error");
        error.innerHTML="Please Enter Password";
        error.style.color="red";
    </script>';
    }

    if($admin_contact=== "")
    {
        echo '<script>
        var error=document.getElementById("contact_error");
        error.innerHTML="Please Enter Contact Number";
        error.style.color="red";
    </script>';
    }
    $object=new data();
    if ($admin_username != ""& $admin_email != ""& $admin_password != ""& $admin_contact != "") {
        $query =$object->register($admin_username,$admin_email,$admin_password,$admin_contact); {

            echo '<script>window.location.href="login.php"</script>';

        }
    }
}
?>