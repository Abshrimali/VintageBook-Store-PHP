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
    include "doc-nav.php";
    ?>

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Appointments</h4>
                    </div>
                    <!-- <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add-appointment.html" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Appointment</a>
                    </div> -->
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>Appointment ID</th>
										<th>Patient Name</th>
										<th>Age</th>
										<!-- <th>Doctor Name</th> -->
					
										<th>Appointment Day</th>
									
										
									</tr>
								</thead>
								<tbody>
                                    <?php
                                    
                                    $query =$object-> specifc_appoinment_2();
while($data=mysqli_fetch_array($query)){

                                        echo '
                                        <tr>
										<td>APT'.$data[0].'</td>
										<td>'.$data[1]. ' '.$data[2]. '</td>
										<td>'.$data[3].'</td>
                                        
										
										<td>'.$data[4].'</td>
										
									</tr>
									';


}
                                    ?>
									<!-- <td><img width="28" height="28" src="../images/'.$data[20].'" class="rounded-circle m-r-5" alt="">'.$data[9]. ' '.$data[10]. '</td>
										 -->
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