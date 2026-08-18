<?php
  $object=new data();
?>
<div class="main-wrapper">
        <div class="header bg-white">
			<div class="header-left">
				<a href="index.php" class="logo">
					<img src="assets/img/logo.png" width="60" height="60" alt=""> <span class="text-dark">Vintage book</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
             
                <li class="nav-item dropdown has-arrow ">
                    <a href="#" class="dropdown-toggle nav-link user-link  text-dark" data-toggle="dropdown">
                        <span class="user-img">
                            <?php
                             $query=$object->admin_sel();
                             $row=mysqli_fetch_assoc($query);
                            if($row['admin_image'] != "")
                            {
                                echo '<img class="rounded-circle" src="../images/'.$row['admin_image'].'" width="24" >'

                               ;
                            }
                            else
                            {
                                echo '<img class="rounded-circle" src="assets/img/user.jpg" width="24" >' ;
                            }
                            ?>
							
							<span class="status online"></span>
						</span>
						<span><?php
                        
                        echo $row['admin_username']?></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.php">My Profile</a>
						<a class="dropdown-item" href="editprofile.php">Edit Profile</a>
						
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="editprofile.php">Edit Profile</a>
                    
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <!-- <li class="menu-title">Main</li> -->
                        <li class="">
                            <a href="../index.php"><img src="assets/img/logo.png"  height="4x0" alt=""> <span>Client Panel</span></a>
                        </li>
                        <li class="active">
                            <a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
							<a href="#"><i class="fa fa-list" aria-hidden="true"></i><span>Category </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								
								<li><a href="add-category.php">Add Category</a></li>
                                <li><a  href="category.php">View Category</a></li>
							</ul>
						</li>
                           
                        
                            <li class="submenu">
							<a href="#"><i class="fa fa-book" aria-hidden="true"></i> <span> Products </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a  href="addproduct.php">Add Products</a></li>
								<li><a href="products.php">View All Products</a></li>
                                <li><a href="feaproducts.php">View Featured Products</a></li>
                                <li><a href="simproducts.php">View Simple Products</a></li>
					
							</ul>
						</li>
                        <!-- <li>
                            <a href="schedule.php"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                        
                        <li>
                            <a href="registration_request.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <span>Registration-Request</span></a>
                        </li>
                        <li>
                            <a href="patients.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li> -->
                        <li>
                            <a href="users.php"><i class="fa fa-users" aria-hidden="true"></i> <span>Clients</span></a>
                        </li>
                        
                        <!-- <li>
                            <a href="contact.php"><i class="fa fa-user-md"></i> <span>Contact</span></a>
                        </li> -->
						
                        <li class="submenu">
                            <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span> Orders</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <!-- <li><a href="blogs.php"> Add Blog</a></li> -->
                                <li><a href="showorders.php">View Orders</a></li>
                                <li><a href="comorders.php">Completed Orders 
                                <?php  $q= $object->count_com_order(); $d=mysqli_fetch_assoc($q); echo $d['COUNT(order_id)']  ?>
                                </a></li>
                                <li><a href="canorders.php">Cancelled Orders 
                                <?php  $q= $object->count_can_order(); $d=mysqli_fetch_assoc($q); echo $d['COUNT(order_id)']  ?> </a></li>
                                <li><a href="proorders.php">On Process Orders 
                                <?php  $q= $object->count_pro_order(); $d=mysqli_fetch_assoc($q); echo $d['COUNT(order_id)']  ?> </a></li>

                            </ul>
                        </li>
						
                     
                </div>
            </div>
        </div>
        <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <?php
                           
                            ?>
                           
            </div>
        </div>
    </div>