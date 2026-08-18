<?php
include "../connection.php";
session_start();
if($_SESSION['admin_fname']=="")
{
    echo '<script>window.location.href="login.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- profile22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Vintage Admin </title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
   <?php 
   include "doc-nav.php"
   ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="doc-editprofile.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                     <?php echo '<a href="#"><img class="inline-block" src="../images/'.$_SESSION['admin_image'].'" "></a>';?>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $_SESSION['admin_fname'].' '.$_SESSION['admin_lname']?></h3>
                                                <h5 class="user-name m-t-0 mb-0"><?php echo $_SESSION['admin_city'].', '.$_SESSION['admin_country']?></h5>
                                                <h5 class="user-name m-t-0 mb-0"><?php echo $_SESSION['admin_gender']?></h5>
                                                <div class="staff-id">
                                                <h4 class="user-name m-t-0 mb-0"></h4>    
                                                </div>
                                                <div class="staff-msg"><a href="doc-editprofile.php" class="btn btn-primary">Edit Profile</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                             
                                            <li>
                                                    <span class="title">User Name:</span>
                                                    <span class="text"><?php echo $_SESSION['admin_fname'].' '.$_SESSION['admin_lname']?></span>
                                                </li>   
                                             
                                            <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><?php echo $_SESSION['admin_contact']?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><?php echo $_SESSION['admin_email']?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Password:</span>
                                                    <span class="text"><?php echo $_SESSION['admin_password']?></span>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
				<div class="profile-tabs">
					

					<div class="tab-content">
						<div class="tab-pane show active" id="about-cont">
               
                   
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- profile23:03-->
</html>