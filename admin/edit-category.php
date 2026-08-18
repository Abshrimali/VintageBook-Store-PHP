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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                        <h4 class="page-title text-center">Edit Category</h4>
                    </div>
                </div>
                <?php
                if (isset($_GET['id'])) 
                {
                    $category_id = $_GET['id'];
                
                    }
 $query=$object->specific_category($category_id);
 $data=mysqli_fetch_array($query);
                ?>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Category Name</label>
								<input class="form-control" type="text" value="<?php echo $data[1]?>" name="categoryname">
							</div>
                            <div class="form-group">
                                <label>Category Image</label>
                                <div>
                                    <input class="form-control" type="file" name="main_image">
                                    <span id="image_1"></span>
                                    
                                </div>
                               
                           
                            <div class="m-t-20 text-center">
                                <input type="submit" name="update" class="btn btn-primary submit-btn" value="Save Changes">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
	
    </div>
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
if(isset($_POST["update"])){
    $category_name = $_POST["categoryname"];
    $main_image = $_FILES["main_image"]["name"];
    $main_location= $_FILES["main_image"]["tmp_name"];
   $txt=pathinfo($main_image,PATHINFO_EXTENSION);
    if($main_image== "")
    {
        echo ' <script>
        var error=document.getElementById("image_1");
        error.innerHTML="Please Choose Image";
        error.style.color="red";
        </script>';
    }
   
    if( $main_image != "" )
    {
        if($txt=="jpg" or $txt=="png" or $txt=="jpeg" )
   { $query =$object->category_edit($category_name,$main_image,$category_id)
        ;  if($query>0){
            echo '<script>swal("Edited ", "Category Successfully Updated ", "success")</script>';
        }
        else{
            echo '<script>swal("OOps ", "Category Not Updated ", "error")</script>';
    
        }
    }
    
    else
    {
        echo '<script>swal("Please Choose ", ".jpg / .png / .jpeg file for image ", "error")</script>';
        
    }
    }
    }
?>
