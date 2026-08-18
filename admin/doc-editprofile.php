<?php
include "../connection.php";
session_start();
if($_SESSION['admin_fname']=="")
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
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<?php
    include "doc-nav.php";
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
                                    <?php echo'<img class="inline-block" src="../images/'.$_SESSION['admin_image'].'" alt="user">';?>
                                    <div class="fileupload btn">
                                        <span class="btn-text" id="image_02">Choose Image</span>
                                        <span class="btn-text" id="image"></span>
                                        <input class="upload" type="file" name="admin_image">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">First Name</label>
                                                <input type="text" class="form-control floating" name="admin_fname" value="<?php echo $_SESSION['admin_fname']?>">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Last Name</label>
                                                <input type="text" class="form-control floating" name="admin_lname" value="<?php echo $_SESSION['admin_lname']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Email Address </label>
                                             
                                                    <input class="form-control floating "name="admin_email" type="email" value="<?php echo $_SESSION['admin_email']?>">
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Gender </label>
                                             <select name="admin_gender" id="" class="form-control floating">
                                            <?php echo' <option value="'.$_SESSION['admin_gender'].'">'.$_SESSION['admin_gender'].'</option>';?>   
                                             <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                             </select>
                                                  
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">City</label>
                                                <input type="text" class="form-control floating" name="admin_city" value="<?php echo $_SESSION['admin_city']?>">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Country</label>
                                                <input type="text" class="form-control floating" name="admin_country" value="<?php echo $_SESSION['admin_country']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Phone-Number </label>
                                             
                                                    <input class="form-control floating "name="admin_phone" type="text" value="<?php echo $_SESSION['admin_contact']?>">
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group form-focus">
                                                <label class="focus-label">Password </label>
                                             
                                                    <input class="form-control floating "name="admin_password" type="text" value="<?php echo $_SESSION['admin_password']?>">
                                               
                                            </div></div>
                                            <div class="col-md-6">
                                            <div class="form-group form-focus">
                                            <label class="focus-label">Day-01 </label>
                                                <select name="day_1" id="" class="form-control floating">
                                            <?php echo' <option value="'.$_SESSION['admin_day1'].'">'.$_SESSION['admin_day1'].'</option>';?>   
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                                <option value="Sunday">Sunday</option>
                                             </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                               
                                            <label class="focus-label">Day-02 </label>
                                            
                                            <select name="day_2" id="" class="form-control floating">
                                            <?php echo' <option value="'.$_SESSION['admin_day2'].'">'.$_SESSION['admin_day2'].'</option>';?>   
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                                <option value="Sunday">Sunday</option>
                                             </select>
                                             
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
    
    $admin_fname = $_POST['admin_fname'];
    $admin_lname = $_POST['admin_lname'];
    $admin_email = $_POST['admin_email'];
    $admin_gender = $_POST['admin_gender'];
    $admin_city = $_POST['admin_city'];
    $admin_country = $_POST['admin_country'];
    $admin_phone = $_POST['admin_phone'];
    $admin_password = $_POST['admin_password'];
    $day_1 = $_POST['day_1'];
    $day_2 = $_POST['day_2'];
    $admin_image = $_FILES['admin_image']['name'];
    $image_location = $_FILES['admin_image']['tmp_name'];
    if($admin_image =="")
    {
        echo ' <script>
        var error=document.getElementById("image");
        error.innerHTML="Please Choose Image";
        error.style.color="white";
        var e_error=document.getElementById("image_02");
        e_error.style.display="none";
        </script>';
    }
    if($admin_image != "")
    {
    move_uploaded_file($image_location, "../images/" . $admin_image);
   
    // $query =$object-> doctor_update($doctor_id,$doctor_fname,$doctor_lname,
    // $doctor_gender,$speciality_id,$doctor_email,$doctor_city,$doctor_country,$doctor_contact,
    // $doctor_password,$day_1,$day_2,$doctor_image);
    if($query==1)
    {
        echo '<script>window.location.href="doc-index.php"</script>';
    }
    else
    {
        echo '<script>window.location.href="doc-editprofile.php"</script>';
    }
    }
}

?>