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
                        <h4 class="page-title">Patients</h4>
                    </div>
                  
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Patient-Id</th>
					
										<th>Patient-First Name</th>
										<th>Patient-Last Name</th>

										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
                                    <?php
                                    $qu =$object-> patient();
                                     while($show=mysqli_fetch_array($qu)){
                                        echo '<tr>
										<td>'.$show[0]. '</td>
										<td>'.$show[1].'</td>
										<td>'.$show[2].'</td>
												<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="patient_details.php?id='.$show[0].'"><i class="fa fa-pencil m-r-5"></i>View More</a>
													<a class="dropdown-item" href="patients.php?id='.$show[0].'"><i class="fa fa-pencil m-r-5"></i>Delete</a>
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
<?php
if(isset($_GET['id'])){
    $id = $_GET["id"];
    $qd =$object->delete_patient($id);
    if($qd>0){

        echo '
        <script>window.location.href="patients.php  "</script>
        ';
    }

}

?>