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


<!-- doctors23:12-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Vintage Admin </title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Doctor Details</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="products.php" class="btn btn-primary btn-rounded float-right"><i class="fa fa-arrow"></i> Back</a>
                    </div>
                </div>
                
				<div class="row doctor-grid">
                    <?php
                    if(isset($_GET['id']))
                    {
                        $product_id = $_GET['id'];
                    
                    }
                    $query = $object->product_data($product_id);
                    while($data=mysqli_fetch_assoc($query))
                    {
                        echo 

                            ' 
                            <div class="col-md-2 col-sm-2  col-lg-2"></div>
                             <div class="col-md-8 col-sm-8  col-lg-8">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" ><img alt="" src="../images/'.$data['Product_Image'].'"></a>
                            </div>
                           
                            <h4 class="doctor-name text-ellipsis"><a href="">'.$data['product_name'].' </a></h4>
                           
                            <div class="doc-prof"> Category   : '.$data['category_name'].'</div>
                            <div class="doc-prof"> Category   : '.$data['product_desc'].'</div>
                            <div class="doc-prof"> Price   : '.$data['product_price'].'</div>
                            <div class="doc-prof">  '.$data['product_stock'].' Pieces Available</div>
                            <div class="doc-prof">  '.$data['product_type'].' Product</div>
                            
                                                    </div>
                    </div>
                    <div class="col-md-2 col-sm-2  col-lg-2"></div>';
                    }
                    ?>
                  
                 
            </div>
          
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- doctors23:17-->
</html>
