<?php
include "../connection.php";
session_start();
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


        <div class="container">
            <div class="content">
            <div class="account-logo">
                            <a href=""><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="assets/img/user.jpg" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text" id="img">Choose Image</span>
                                        <span class="btn-text" id="img_error" style="display: none;">Please Choose Image </span>
                                        <input class="upload" type="file" name="doctor_image">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">First Name</label>
                                                <input name="doctor_fname" id="fname" type="text" class="form-control floating" >
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Last Name</label>
                                                <input name="doctor_lname" id="lname" type="text" class="form-control floating" >
                                            
                                            </div> 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                            <label class="focus-label">Speciality</label>
                                                <select name="doctor_speciality" class="form-control floating" id="speciality">
                                                    <option ></option>
                                                    <?php
                                                    $object=new data();
                                                    // $query =$object->select_department();
                                                   while( $data = mysqli_fetch_array($query))
                                                   {
                                                        echo '<option value="'.$data[0].'" >'.$data[1].'</option>';
                                                   }
                                                    ?>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group form-focus ">
                                                <label class="focus-label">Gender</label>
                                                <select  name="doctor_gender" class="form-control floating" id="gender">
                                                <option ></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                            <label class="focus-label">Select First Day</label>
                                                <select name="day_1" class="form-control floating" id="day_1" >
                                                <option ></option>
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
                                            <div class="form-group form-focus ">
                                                <label class="focus-label">Select Second Day</label>
                                                <select  name="day_2" class="form-control floating" id="day_2" >
                                                <option ></option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                    <option value="Friday">Friday</option>
                                                    <option value="Saturday">Saturday</option>
                                                    <option value="Sunday">Sunday</option>
                                                </select>
                                            </div>
                                            <span id="same_day"class="text-center" ></span>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-focus ">
                                                <label class="focus-label">From Time</label>
                                                <input name="doctor_time1" id="time1" type="time" class="form-control floating" >
                                            
                                            </div> 
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">To Time</label>
                                                <input name="doctor_time2" id="time2" type="time" class="form-control floating" >
                                            
                                            </div> 
                                            <span id="time"class="text-center" ></span>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Upload Your FSC-Certficate</label>
                                                <input name="doctor_degree1" id="degree1" type="file" class="form-control" >
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="focus-label">Upload Your MBBS Degree Certificate</label>
                                                <input name="doctor_degree2" id="degree2" type="file" class="form-control" >
                                                
                                            </div>
                                        </div>






                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="card-box">
                        <h3 class="card-title">Contact Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Email Address</label>
                                    <input name="doctor_email" type="email" class="form-control floating" id="email" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">City</label>
                                    <input name="doctor_city"  type="text" class="form-control floating" id="city" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Country</label>
                                    <input name="doctor_country" type="text" class="form-control floating" id="country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Password</label>
                                    <input name="doctor_password" type="password" class="form-control floating" id="password" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Phone Number</label>
                                    <input name="doctor_contact"  minlength="11" maxlength="11" type="text" class="form-control floating" id="contact" >
                                </div>
                                <div class="text-center m-t-20">
                        <input class="btn btn-primary submit-btn" type="submit" name="add" value="Request Admin">
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>


<!-- edit-profile23:05-->
</html>
<?php
if(isset($_POST['add']))
{
    $doctor_fname = $_POST['doctor_fname'];
    $doctor_lname = $_POST['doctor_lname'];
    $doctor_speciality = $_POST['doctor_speciality'];
    $doctor_gender = $_POST['doctor_gender'];
    $doctor_email = $_POST['doctor_email'];
    $doctor_city = $_POST['doctor_city'];
    $doctor_country = $_POST['doctor_country'];
    $doctor_password = $_POST['doctor_password'];
    $doctor_contact = $_POST['doctor_contact'];
    $day_1 = $_POST['day_1'];
    $day_2 = $_POST['day_2'];
    $doctor_time1 = $_POST['doctor_time1'];
    $doctor_time2 = $_POST['doctor_time2'];
    $doctor_image = $_FILES['doctor_image']['name'];
    $image_location = $_FILES['doctor_image']['tmp_name'];
    $doctor_degree1 = $_FILES['doctor_degree1']['name'];
    $degree_location1 = $_FILES['doctor_degree1']['tmp_name'];
    $doctor_degree2 = $_FILES['doctor_degree2']['name'];
    $degree_location2 = $_FILES['doctor_degree2']['tmp_name'];
    $txt=pathinfo($doctor_image,PATHINFO_EXTENSION);
    $deg_1=pathinfo($doctor_degree1,PATHINFO_EXTENSION);
    $deg_2=pathinfo($doctor_degree2,PATHINFO_EXTENSION);
    if($doctor_fname== "" )
    {
        echo '<script>
        var error=document.getElementById("fname");
        error.style.border="1px solid red";
    </script>';
    }
    if($doctor_lname== "" )
    {
        echo '<script>
        var error=document.getElementById("lname");
        error.style.border="1px solid red";
    </script>';
    }
    if($doctor_speciality== "" )
    {
        echo '<script>
        var error=document.getElementById("speciality");
        error.style.border="1px solid red";
    </script>';
    }
    if($doctor_gender== "" )
    {
        echo '<script>
        var error=document.getElementById("gender");
        error.style.border="1px solid red";
    </script>';
    }
    

if($doctor_degree1== "" )
{
    echo '<script>
    var error=document.getElementById("degree1");
    error.style.border="1px solid red";
</script>';
}

if($doctor_degree2== "" )
{
    echo '<script>
    var error=document.getElementById("degree2");
    error.style.border="1px solid red";
</script>';
}



if($doctor_time1== "" )
{
    echo '<script>
    var error=document.getElementById("time1");
    error.style.border="1px solid red";
</script>';
}
if($doctor_time2== "" )
{
    echo '<script>
    var error=document.getElementById("time2");
    error.style.border="1px solid red";
</script>';
}

    if($doctor_email== "" )
    {
        echo '<script>
        var error=document.getElementById("email");
        error.style.border="1px solid red";
    </script>';
    }
    if($doctor_city== "" )
    {
        echo '<script>
        var error=document.getElementById("city");
        error.style.border="1px solid red";
    </script>';
    }
    if($doctor_country== "" )
    {
        echo '<script>
        var error=document.getElementById("country");
        error.style.border="1px solid red";
    </script>';
    }
    if($doctor_password== "" )
    {
        echo '<script>
        var error=document.getElementById("password");
        error.style.border="1px solid red";
    </script>';
    }
    if($doctor_contact== "" )
    {
        echo '<script>
        var error=document.getElementById("contact");
        error.style.border="1px solid red";
    </script>';
    }
    if($day_1== "" )
    {
        echo '<script>
        var error=document.getElementById("day_1");
        error.style.border="1px solid red";
    </script>';
    }
    if($day_2== "" )
    {
        echo '<script>
        var error=document.getElementById("day_2");
        error.style.border="1px solid red";
    </script>';
    }
    if($doctor_image== "" )
    {
        echo '<script>
        var error=document.getElementById("img_error");
        error.style.display="block";
       
        var e_error=document.getElementById("img");
        e_error.style.display="none";
    </script>';
    }
    
    if($doctor_fname !="" & $doctor_lname !="" & $doctor_speciality !="" & $doctor_gender !="" & $day_1 !="" & $day_2 !="" & $doctor_email !="" & $doctor_city !="" & $doctor_country !="" & $doctor_password !="" & $doctor_contact !="" & $doctor_time1 !="" & $doctor_time2 !="" & $doctor_degree1 !="" & $doctor_degree2 !="" )
    {
        
    
    // $query = $object->select_doctor_email($doctor_email);
    $row = mysqli_num_rows($query);
    if($row==1)
    {
        echo '<script>swal("Doctor Registration Failed", "This Email Already Exists", "error")</script>';
    }

    if($day_1 == $day_2 )
    {
        echo '<script>
        var day_error=document.getElementById("same_day");
        day_error.innerHTML="Please Choose Alternate Days";
        day_error.style.color="red";
       
    </script>';
    }
    if($doctor_time1 == $doctor_time2 )
{
    echo '<script>
    var time_error=document.getElementById("time");
    time_error.innerHTML="Please Choose Different Time";
    time_error.style.color="red";
   
</script>';
}  
    

    
        if($txt=="jpg" or $txt=="png" or $txt=="jpeg" or $deg_1=="pdf" or $deg_1=="docx" or $deg_2=="pdf" or $deg_2=="docx" )
        {
             move_uploaded_file($image_location, "../images/" . $doctor_image);
             move_uploaded_file($degree_location1, "../images/" . $doctor_degree1);
             move_uploaded_file($degree_location2, "../images/" . $doctor_degree2);
     
     
             $object->insert_doctor_self($doctor_fname,$doctor_lname,
             $doctor_speciality,$doctor_gender,$doctor_email,$doctor_city,$doctor_country,$doctor_contact,
             $doctor_password,$day_1,$day_2,$doctor_image,$doctor_time1,$doctor_time2,$doctor_degree1,$doctor_degree2);
   echo '<script>swal("Data Sent To The Admin", "Wait While We Contact You", "success")
window.location.href="login.php";
</script>';    


}
else
    {
        echo '<script>swal("Please Choose ", ".jpg / .png / .jpeg file for image ANd .pdf / .doc files for degree", "error")</script>';
    }
    }
    
}


?>