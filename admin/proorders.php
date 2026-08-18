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


<!-- departments23:21-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Vintage Admin </title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
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
                    <div class="col-sm-4 col-4">
                        <h4 class="page-title">Orders</h4>
                    </div>
                    <!-- <div class="col-sm-4 col-4 text-right m-b-30">
                        <input type="text" class="form-control" name="search" placeholder="sort by status">
                        
                        <a href="blogs.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Blogs</a>
                    </div>
                    <div class="col-sm-4 col-4 m-b-30">
                      
                        <input type="submit" class="btn btn-primary submit-btn" name="done" value="Sort">
                        <a href="blogs.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Blogs</a>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>Book Name</th>
                                        <th>Quantity</th>
                                        <th>Client Name</th>
                                        <th>client Address</th>
                                        <th>Client Email</th>
                                        <th>Client Phone</th>
                                        <th>Order Status</th>
                                        <th>Order Placed on</th>
                                        <th>Bill</th>
                                     <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                  
                                    $query =$object-> view_pro_order();
                                    while($data=mysqli_fetch_assoc($query)){

                                        echo '
                                        <td>'.$data['product_name'].'</td>
                                        <td>'.$data['order_qty'].'</td>
                                        <td>'.$data['name'].'</td>
                                        <td>'.$data['address'].'</td>
                                        <td>'.$data['email'].'</td>
                                        <td>'.$data['contact'].'</td>
                                        <td>'.$data['order_status'].'</td>
                                        <td>'.$data['order_time'].'</td>
                                        <td>'.$to = $data['order_qty'] * $data['product_price'] .'</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="editstatus.php?id='.$data['order_id'].' & status=Cancelled"><i class="fa fa-pencil m-r-5"></i> Update Status to Cancelled</a>
                                                    <a class="dropdown-item" href="editstatus.php?id='.$data['order_id'].' & status=Completed"><i class="fa fa-pencil m-r-5"></i> Update Status to Completed</a>
                                                    <a class="dropdown-item" href="editstatus.php?id='.$data['order_id'].' & status=Processing"><i class="fa fa-pencil m-r-5"></i> Update Status to Processing</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                        ';


                                    }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- yh action ka more wagera hy -->
            <!-- <a class="dropdown-item" href="ordersdetails.php?id="><i class="fa fa-pencil m-r-5"></i> More..</a>
            <a class="dropdown-item" href="?id="><i class="fa fa-trash-o m-r-5"></i> Delete</a> -->
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- departments23:21-->
</html>
<?php

?>