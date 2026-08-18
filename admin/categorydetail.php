<?php
include "../connection.php";
session_start();
if($_SESSION['admin_username']=="")
{
    echo '<script>window.location.href="login.php"</script>';
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
   include "nav.php";
   ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title text-center">Category Detail</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                      <?php
                      if (isset($_GET['id'])) 
                      {
                          $category_id = $_GET['id'];
                          
                          $query =$object-> specific_category($category_id);
                           $data = mysqli_fetch_array($query);
                      }
                        echo 
                        '  <div class="col-md-12 col-sm-12  col-lg-12">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href=""><img alt="" src="../images/'.$data[2].'"></a>
                            </div>
                           
                            <h4 class="doctor-name text-ellipsis"><a href="">'.$data[1].' category</a></h4>
                            
                           
                        </div>
                    </div>';
                    
                      ?>

                        
							
		
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- edit-department24:07-->
</html>
<?php
if(isset($_POST["back"])){
   
        echo '<script>window.location.href="departments.php"</script>';
    
}

?>
