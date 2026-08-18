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
    $query =$object-> sel_doc($doctor_id);
    
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
                        <h4 class="page-title">Clients</h4>
                    </div>
                   
                </div>



                 

<div class="row" >
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead id="go">
                                <tr>
                                    <th>Client ID</th>
                                    <th>Client First Name</th>
                                    <th>Client Last Name</th>
                                    <th>Client Email</th>
                                   </tr>
                            </thead>
                            <tbody>

                                    <?php
                                    $query =$object-> users();
while($data=mysqli_fetch_array($query)){

                                        echo '
                                        <tr>
										<td>'.$data[0].'</td>
										<td>'.$data[1]. ' </td>
										<td>'.$data[2].'</td>
                                        <td>'.$data[3].'</td>
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
