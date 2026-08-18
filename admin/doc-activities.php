<!DOCTYPE html>
<html lang="en">

<?php
include "../connection.php";
session_start();
if($_SESSION['admin_fname']=="")
{
    echo '<script>window.location.href="login.php"</script>';
}
?>
<!-- activities22:59-->
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
  include "doc-nav.php";
  ?>
  
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Activities</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="activity">
                            <div class="activity-box">
                                <ul class="activity-list">
                                    
                                   <?php
                                   
                                   $query = $object->specifc_appoinment();
                                   while($data=mysqli_fetch_array($query))
                                   {
                                       echo
                                           '<li>
                                           <div class="activity-user">
                                               <a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
                                                <img  src="../images/'.$data[22].'" class="img-fluid rounded-circle">
                                               </a>
                                           </div>
                                           <div class="activity-content">
                                               <div class="timeline-content">
                                                   <a href="profile.html" class="name"> You </a> Have An Appointment By Patient <a href="#"> '.$data[1].' '.$data[2].'</a>
                                                   <span class="time">On '.$data[4].'</span>
                                               </div>
                                           </div>
                                         
                                       </li>';
                                   }
                                   ?>
                                </ul>
                            </div>
                        </div>
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


<!-- activities22:59-->
</html>