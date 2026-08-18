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
                        <h4 class="page-title">Products</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="addproduct.php" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Products</a>
                    </div>
                </div>
                
				<div class="row doctor-grid">
                    <?php
                    
                    $query =$object->show_products() ;
                    while($data=mysqli_fetch_assoc($query))
                    {
                      $text = $data['product_desc'];
                      $limit=20;
                      if(strlen($text)>$limit){
                        $text=substr($text,0,$limit).".....";
                    }
                        echo 
                        '  <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href=""><img alt="" src="../images/'.$data['Product_Image'].'"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="products.php?id='.$data['product_id'].'" ><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="edit-product.php?id='.$data['product_id'].'"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="details.php?id='.$data['product_id'].'"><i class="fa fa-pencil m-r-5"></i> Details</a>
                                    
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a href="">'.$data['product_name'].'</a></h4>
                            <div class="doc-prof"> '.$data['category_name'].'  Category</div>
                            <p class="doc-prof">  DESCRIPTION : '.$text.'</p>
                            <div class="doc-prof"> Price  '.$data['product_price'].'</div>
                            <div class="doc-prof"> '.$data['product_stock'].' Pieces Available</div>
                            <div class="doc-prof"> '.$data['product_type'].'  Product</div>
                            
                            <div class="user-country">
                               
                            </div>
                        </div>
                    </div>';
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
<?php
if(isset($_GET['id']))
{
    $product_id = $_GET['id'];
    $query = $object->delete_product($product_id);
    if($query==1)
    {
        echo '<script>window.location.href="products.php"</script>';
    }
    else
    {
        echo '<script>alert("Not Deleted")</script>';
    }
}
?> 