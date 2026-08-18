<?php
include "../connection.php";
session_start();
if(!isset($_SESSION['admin_username']))
{
    echo '<script>window.location.href="login.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- add-department24:07-->
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
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Add Categories</h4>
                    </div>
                    <div class="col-sm-7 col-7 text-right m-b-30">
                        <a href="category.php" class="btn btn-primary btn-rounded"> Show Category</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Category Name</label>
								<input name="categoryname" class="form-control" type="text">
                                <span id="dep_name"></span>
							</div>
                            <div class="form-group">
                                <label>Category Image</label>
                                <div>
                                    <input class="form-control" type="file" name="main_image">
                                    <span id="dep_image"></span>
                                </div>
                                <!-- <div class="form-group">
                                <label>Description  Images</label>
                                <div>
                                    <input class="form-control" type="file"  name="sub_image">
                                    <span id="dep_sub"></span>
                                </div> -->
<!-- 
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="departmentdescription" cols="30" rows="4" class="form-control"></textarea>
                                <span id="dep_detail"></span>
                            </div> -->
                           

                            <div class="m-t-20 text-center">
                                <input type="submit" class="btn btn-primary submit-btn" name="create" value="Create Category">
                            </div>
                        </form>
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


<!-- add-department24:07-->
</html>
<script>
   var name= document.getElementById("dep_name");
   name.innerHTML="Please Enter Name";
        name.style.color="red";
</script>
<?php
if(isset($_POST["create"])){
    $category_name = $_POST["categoryname"];
    $main_image = $_FILES["main_image"]["name"];
    $main_location= $_FILES["main_image"]["tmp_name"];
    $txt2=pathinfo($main_image,PATHINFO_EXTENSION);
    if($category_name== "")
    {
        echo '<script>
        var error= document.getElementById("dep_name");
       error.innerHTML="Please Enter Name";
            error.style.color="red";
     </script>';
    }
    if($main_image== "")
    {
        echo '<script>
        var error= document.getElementById("dep_image");
       error.innerHTML="Kindly Select Image";
            error.style.color="red";
     </script>';
    }
    
    if($category_name!="" & $main_image!="" )
    {
        if( $txt2=="jpg" or $txt2=="png" or $txt2=="jpeg")
        {
    move_uploaded_file($main_location,"../images/".$main_image);
  
    $query = $object->select_specific($category_name); 
    $row = mysqli_num_rows($query); 
    if($row>0){
        
        echo '<script>swal("Operation Failed", "This Category Already Exists", "error");
        </script>';
    }
    else{

       $object->insert($category_name,$main_image) ;

       echo '<script>swal("Added", "Your Category Is Added", "success");
        </script>';

    }
    }
else
{
    echo '<script>swal("Please Choose ", ".jpg / .jpeg / .png files for image", "error");
    </script>';
}
}
}

?>