<?php
include "../connection.php";
session_start();
if($_SESSION['admin_username']=="")
{
    echo '<script>window.location.href="login.php"</script>';
}
if (isset($_GET['id'])) 
{
    $department_id = $_GET['id'];
    

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
   $query =$object->specific_blog($department_id); 
   $data = mysqli_fetch_array($query);
   ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title text-center">Edit Blog</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Blog Name</label>
								<input class="form-control" type="text" value="<?php echo $data[1]?>" name="departmentname">
							</div>
                           
                                <div class="form-group">
                                <label>Images</label>
                                <div>
                                    <input class="form-control" type="file"  name="sub_image">
                                    <span id="image_2"></span>
                                </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" name="departmentdescription" rows="4" class="form-control"><?php echo $data[2]?></textarea>
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
    $department_name = $_POST["departmentname"];
    $department_description = $_POST["departmentdescription"];
   $sub_image = $_FILES["sub_image"]["name"];
    $sub_location = $_FILES["sub_image"]["tmp_name"];
    $txt=pathinfo($sub_image,PATHINFO_EXTENSION);
    
    if($sub_image== "")
    {
        echo ' <script>
        var error=document.getElementById("image_2");
        error.innerHTML="Please Choose Image";
        error.style.color="red";
        </script>';
    }
    if( $sub_image != "")
    {
        if($txt=="jpg" or $txt=="png" or $txt=="jpeg"  )
        {
    move_uploaded_file($sub_location,"../images/".$sub_image);
    $query =$object->edit_blog($department_name,$department_description,$sub_image,$department_id); 
    if($query>0){
        echo '<script>window.location.href="showblogs.php"</script>';
    }
    else{
        echo '<script>window.location.href="editblogs.php"</script>';

    }
}
else
{
    echo '<script>swal("Please Choose ", ".jpg / .png / .jpeg file for image ", "error")</script>';
    
}
}
}
?>
