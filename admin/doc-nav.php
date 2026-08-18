
<div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="doc-index.php" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>CARE</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" title="Notifications/Appointments" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">
                    <?php
                    $object=new data();
                    $qs = $object->count_specific_appointment();
                    	foreach($qs as $count){
									echo  $count["COUNT(appointment_id)"];
								}
								?>
                            </span>   
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                
                                <?php
                                $object=new data();
                        $shw = $object->specifc_appoinment();
                         while($n_data=mysqli_fetch_array($shw)){

                            echo ' <li class="notification-message">
                            <a href="doc-activities.php">
                                <div class="media">
                                    <span class="avatar">'.$n_data[1].'</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">'.$n_data[1].' '.$n_data[2].'</span> Just Place An Appointment Of <span class="noti-title"> Yours </span></p>
                                        <p class="noti-time"><span class="notification-time">Of  '.$n_data[4].'</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                      ';

                        }
                        ?>
                            
                               
                        <div class="topnav-dropdown-footer">
                           
                        </div>
                    </div>
                </li>
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <?php
                                $query=$object->session_doc();
                                $data=mysqli_fetch_assoc($query);
                            if(isset($_SESSION['admin_image']))
                            {


                                echo '<img class="rounded-circle" src="../images/'.$data['doctor_image'].'" width="24" >';
                              
                            }
                            else
                            {
                                echo '<img class="rounded-circle" src="assets/img/user.jpg" width="24" >';
                            }
                            ?>
							
							<span class="status online"></span>
						</span>
						<span><?php echo $data['doctor_fname']?></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="doc-profile.php">My Profile</a>
						<a class="dropdown-item" href="doc-editprofile.php">Edit Profile</a>
						
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="doc-profile.php">My Profile</a>
                    <a class="dropdown-item" href="doc-editprofile.php">Edit Profile</a>
                
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="../patient/index.php"><i class="fa fa-dashboard"></i> <span>CARE</span></a>
                        </li>
                       
                        <li>
                            <a href="doc-appointment.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        
                </div>
            </div>
        </div>
     