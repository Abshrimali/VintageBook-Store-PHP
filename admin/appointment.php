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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>CARE-Medical & Hospital </title>
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
                        <h4 class="page-title">Appointments</h4>
                    </div>
                    <div class="col-sm-4 col-3">
                        <form action="" method="post">
                        <input type="search" name="contact" placeholder="Search Via Contact Number" class="form-control"> 
                    </div>
                    <div class="col-sm-4 col-3">
                        
                        <input style="margin-top: 5px;" type="submit" name="search" value="Search" class="btn btn-primary account-btn" ></form>
                    </div>

                </div>



                                    <?php
                                    if(isset($_POST["search"])){
                                        echo '<script>

                                        var hide=document.getElementById("go");
                                        hide.style.display="none";
                                        </script>';
                                        
                                        $search=$_POST["contact"];
                                        $qu=$object->search_appointment($search);
                                        
                                     
    $data=mysqli_fetch_array($qu);
    
                                            echo '
                                            
				<div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th>Appointment ID</th>
                                    <th>Patient Name</th>
                                    <th>Age</th>
                                    <th>Patient-Contact</th>
                                    <th>Doctor Name</th>

                
                                    <th>Appointment Day</th>
                                <th>Appointment Time</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                            <tr>
                                            <td>APT'.$data[0].'</td>
                                            <td>'.$data[1]. ' '.$data[2]. '</td>
                                            <td>'.$data[3].'</td>
                                            <td>'.$data[6].'</td>	
                                            <td>'.$data[11]. '  '.$data[12]. '  </td>
                                            <td>'.$data[4].'</td>
                                            <td>'.$data[9].'</td>
                                            
    
    
                                            
                                            
                                            
                                            
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="app-detail.php?id='.$data[0].'"><i class="fa fa-pencil m-r-5"></i> View More</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
    
    
    
                                     
    
    
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>';
                
                
    


}
    
    
    ?>

<div class="row" >
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead id="go">
                                <tr>
                                    <th>Appointment ID</th>
                                    <th>Patient Name</th>
                                    <th>Age</th>
                                    <th>Patient-Contact</th>
                                    <th>Doctor Name</th>
                
                                    <th>Appointment Day</th>
                                <th>Appointment Time</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <?php
                                    $query =$object-> appointment();
while($data=mysqli_fetch_array($query)){

                                        echo '
                                        <tr>
										<td>APT'.$data[0].'</td>
										<td>'.$data[1]. ' '.$data[2]. '</td>
										<td>'.$data[3].'</td>
                                        <td>'.$data[6].'</td>	
                                        <td>'.$data[11]. '  '.$data[12]. '  </td>
                                        <td>'.$data[4].'</td>
                                        <td>'.$data[9].'</td>
                                        


										
										
										
                                        
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="app-detail.php?id='.$data[0].'"><i class="fa fa-pencil m-r-5"></i> View More</a>
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
