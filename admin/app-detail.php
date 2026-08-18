<?php
include "../connection.php";
session_start();
if($_SESSION['admin_username']=="")
{
    echo '<script>window.location.href="login.php"</script>';
}
if(isset($_GET['id']))
{
    $appointment_id = $_GET['id'];
    
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- edit-department24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Vintage Admin </title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
   <?php
   include "nav.php"
   ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title text-center">Patient Detail</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                      <?php
                      
                      $query =$object-> patient_detial($appointment_id);
                       while($data=mysqli_fetch_array($query)){

                          echo
                              '  <div class="col-md-12 col-sm-12  col-lg-12">
                        <div class="profile-widget">
                            <div class="doctor-img">
                            <span class="avatar">'.$data[8].'</span>
                            </div>
                           
                            <h4 class="doctor-name text-ellipsis"><a href="">Patient Name    :  ' . $data[1] . ' ' . $data[2] . ' </a></h4>
                            <h4 class="doctor-name text-ellipsis"><a href="">Doctor Name    :  ' . $data[11] . ' ' . $data[12] . '  </a></h4>
                            <h5 class="doctor-name text-ellipsis"><a href="">Appointment Day     :    ' . $data[4] . ' </a></h5>
                            <h5 class="doctor-name text-ellipsis"><a href="">Patient Age     :    ' . $data[3] . ' </a></h5>
                            
                            <span>Patient Email  :    '.$data[5].'</span>
                            <div class="doc-prof" >Patient Contact- No  :   ' . $data[6] . '</div>
                            <div class="doc-prof" >Appointment Taken At  :   ' . $data[9] . '</div>
                    
                        </div>
                    </div>';
    }
                    
                      ?>
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</html>