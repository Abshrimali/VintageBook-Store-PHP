<?php
include "../connection.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Vintage Admin login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form method="post" class="form-signin">
						<div class="account-logo">
                            <img src="assets/img/logo-dark.png" alt="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" autofocus="" name="admin_email" class="form-control">
                            <span id="mail_error"></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="admin_password" class="form-control">
                            <span id="password_error"></span>
                        </div>
                        <!-- <div class="form-group">
                            <label>Your Role</label>
                            <select name="role" id="" class="form-control">
                            <option value="">--Select Role--</option>   
                            <option value="Admin">Admin</option>
                            <option value="Doctor">Doctor</option>
                            </select>
                            <span id="role_error"></span>
                        </div> -->
                        <div class="form-group text-left" id="error">
                           
                        </div>
                        <!-- <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div> -->
                        <div class="form-group text-center">
                            <input type="submit" name="login" value="Login" class="btn btn-primary account-btn">
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="register.php" class="text-primary">Register Now</a>
                        </div>
                        <div class="text-center register-link">
                             <a href="../index.php" class="text-primary">Go Back to client Panel</a>
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


<!-- login23:12-->
</html>

<?php

if(isset($_POST['login']))
{


    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    // $role = $_POST['role'];
    if($admin_email== "")
    {
        echo '<script>
        var error=document.getElementById("mail_error");
        error.innerHTML="Please Enter Email";
        error.style.color="red";
        var e_error=document.getElementById("error");
        e_error.style.display="none";
    </script>';
    }
    if($admin_password== "")
    {
        echo '<script>
        var error=document.getElementById("password_error");
        error.innerHTML="Please Enter Password";
        error.style.color="red";
        var e_error=document.getElementById("error");
        e_error.style.display="none";
    </script>';
    }
    // if($role== "")
    // {
    //     echo '<script>
    //     var error=document.getElementById("role_error");
    //     error.innerHTML="Please Select Role";
    //     error.style.color="red";
    //     var e_error=document.getElementById("error");
    //     e_error.style.display="none";
    // </script>';
    // }
    // if($role== "Admin")
    
    if($admin_email !=  ""  && $admin_password != "")
    {
        $object=new data();
        $query =$object->admin_login($admin_email,$admin_password);
          $rows = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);
     if($rows==1)
     {
 
       $_SESSION['admin_id'] = $data[0];
        $_SESSION['admin_username'] = $data[1];
        $_SESSION['admin_email'] = $data[2];
        $_SESSION['admin_password'] = $data[3];
        $_SESSION['admin_contact'] = $data[4];
        $_SESSION['admin_image'] = $data[5];
      
        echo '<script>window.location.href="index.php"</script>;';
        
      
    }
    if($rows==0)
    {
        echo '<script>
        var error=document.getElementById("error");
        error.innerHTML="Details Not Matched";
        error.style.color="red";
    </script>';
    }
   
    }
    // if($role== "Doctor")
    // {
    
    //     $query = $object->doctor_login($admin_email,$admin_password);
    //     $rows = mysqli_num_rows($query);
    // $data = mysqli_fetch_array($query);
    //  if($rows===1)
    //  {

    //     echo '<script>window.location.href="doc-index.php"</script>;';
    //     $_SESSION['admin_id'] = $data[0];
    //     $_SESSION['admin_fname'] = $data[1];
    //     $_SESSION['admin_lname'] = $data[2];
    //     $_SESSION['admin_gender'] = $data[4];
    //     $_SESSION['admin_email'] = $data[5];
    //     $_SESSION['admin_city'] = $data[6];
    //     $_SESSION['admin_country'] = $data[7];
    //     $_SESSION['admin_contact'] = $data[8];
    //     $_SESSION['admin_password'] = $data[9];
    //     $_SESSION['admin_contact'] = $data[8];
    //     $_SESSION['admin_day1'] = $data[10];
    //     $_SESSION['admin_day2'] = $data[11];
    //     $_SESSION['admin_image'] = $data[12];
    // }
    // if($rows==0)
    // {
    //     echo '<script>
    //     var error=document.getElementById("error");
    //     error.innerHTML="Details Not Matched";
    //     error.style.color="red";
    // </script>';
    // }
   
    }
    


?>