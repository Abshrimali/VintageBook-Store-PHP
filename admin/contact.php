<?php
include "../connection.php";

session_start();
if($_SESSION['admin_username']=="")
{
    echo '<script>window.location.href="login.php"</script>';
}
if(isset($_GET['id']))
{
    $doctor_id = $_GET['id'];
    
    $query = $object->select_doctor_id($doctor_id);
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
                        <h4 class="page-title">Queries</h4>
                    </div>
                  
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th> User Id</th>
										<th>Name</th>
                                        <th>Phone Number</th>
										<th>Email</th>
										<th>Message</th>
					
									
									
										
									</tr>
								</thead>
								<tbody>
                                    <?php
                                     $qu =$object->contact_select();
                                      while($row = mysqli_fetch_array($qu))
                                    {

                                        echo '
                                        <tr>
										<td>USER  '.$row[0].'</td>
										<td>'.$row[1]. '</td>
										<td>'.$row[3].'</td>
                                        <td>'.$row[2].'</td>
                                        <td>'.$row[4].'</td>
                                       
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
       

            <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- patients23:19-->
</html>