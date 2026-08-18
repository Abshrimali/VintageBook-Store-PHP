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


<!-- edit-profile23:03-->
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
                                    <?php 
$query=$object->admin_sel();
$row=mysqli_fetch_assoc($query);

?>
        

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                           <?php     
                           echo '<img class="rounded-circle" src="../images/'.$row['admin_image'].'" width="24" alt="Admin">';
                           
                           
                           ?>
                                    <div class="fileupload btn">
                                        <span class="btn-text">Choose Image</span>
                                        <input class="upload" type="file" name="admin_image">
                                    </div>
                                </div>

                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">User Name</label>
                                                <input type="text" class="form-control floating" name="admin_username" value="<?php echo $row['admin_username']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Email Address</label>
                                                <input type="email" class="form-control floating" name="admin_email" value="<?php echo $row['admin_email']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Password </label>
                                             
                                                    <input class="form-control floating "name="admin_password" type="text" value="<?php echo $row['admin_password']?>">
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Mobile number </label>
                                             
                                                    <input class="form-control floating "name="admin_contact" type="text" value="<?php echo $row['admin_contact']?>">
                                               
                                            </div>
                                            <div class="text-center m-t-20">
                        <input class="btn btn-primary submit-btn" type="submit" name="update" value="Save">
                    </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                   
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


<!-- edit-profile23:05-->
</html>
<?php
if(isset($_POST['update']))
{
    echo $_SESSION['admin_id'];
    $admin_username = $_POST['admin_username'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $admin_contact = $_POST['admin_contact'];
    $admin_image = $_FILES['admin_image']['name'];
    $image_location = $_FILES['admin_image']['tmp_name'];
        move_uploaded_file($image_location, "../images/" . $admin_image);
       
    $query = $object->admin_update($admin_username,$admin_email,$admin_password,$admin_contact,$admin_image);
    if($query==1)
    {
        echo '<script>swal("Done", "Pofile  updated SuccessFully ", "success")</script>';
    }
    else
    {
        echo '<script>swal("Failed", "Profile Not updated ", "error")</script>';
    }
    }

?>