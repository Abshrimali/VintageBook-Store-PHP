<?php
include("connection.php");
session_start();
$query = mysqli_query($conn, "SELECT * FROM `products` WHERE product_type = 'featured';
");
?>
<!-- include("header.php"); -->
<!-- echo $_SESSION["user_name"]; -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vintage Book Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Favicon  -->
    <link rel="icon" href="images/logo/Your paragraph text.png">
    <link rel="stylesheet" type="text/css" href="plugins/flexslider/flexslider.css">
    <link rel="stylesheet" type="text/css" href="styles/product.css">
    <link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/core-style.css">
    <link rel="stylesheet" type="text/css" href="styles/util.css">
    <link rel="stylesheet" type="text/css" href="styles/single-product.css">
    <link rel="stylesheet" type="text/css" href="styles/star.css">
</head>

<body>
    <!-- Header -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a href="index.php" class="book_your_shelf_logo">
                    <img src="images/logo/Your paragraph text.png" alt="">
                </a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="#">Category</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Categories</li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">Fiction and
                                                Literature</a>
                                        </li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">Health and Care</a>
                                        </li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">Literature and
                                                Writing</a>
                                        </li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">Life Style</a></li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">Sports and
                                                Recreation</a>
                                        </li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">Science Fiction and
                                                Fantasy</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Campaigns</li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">Black Friday</a></li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">Sports Day</a></li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">%40 Discount on
                                                Science
                                                Fiction and Fantasy</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Hot Lists</li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">Best Sellers</a></li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">New Releases</a></li>
                                        <li><a href="category.html" class="nav-bar-text-overflow">Our Picks For You</a>
                                        </li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="images/icons/01brownebookicon.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="about.php">About us</a>
                            </li>
                            <li><a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <?php
                if (isset($_SESSION["user_name"])) {
                ?>
                    <!-- User Area -->
                    <div class="user-button-dropdown user-login-info">
                        <a style="width: auto; padding: 5px;" href="profile.php"><img src="images/<?php echo $_SESSION["user_profile"] ?>">Hello: <?php echo $_SESSION["user_name"] ?></a>
                      
                        <div class="user-button-dropdown-content">
                            <a href="logout.php" style="line-height: 40px">Logout</a>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <!-- User Area -->
                    <div class="user-button-dropdown user-login-info">
                        <a href=""><img src="images/core-img/user.svg" alt=""></a>
                        <div class="user-button-dropdown-content">
                            <a href="register.php" style="line-height: 40px">Register</a>
                            <a href="login.php" style="line-height: 40px">Login</a>
                            <a href="profile.html" style="line-height: 40px">Profile</a>
                            <a href="admin-panel.html" style="line-height: 40px">Panel</a>
                            <a href="logout.php" style="line-height: 40px">Logout</a>
                        </div>
                    </div>
                <?php
                }
                ?>


                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="wish-list.html"><img src="images/core-img/heart.svg" alt=""></a>
                </div>

                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="cart.html" id="essenceCartBtn"><img src="images/core-img/bag.svg" alt="">
                        <span>3</span></a>
                </div>
            </div>
        </div>
    </header>
    <!-- Slider start -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/pexels-photo-2908984.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/pexels-photo-2908984.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/pexels-photo-2908984.jpeg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Slider End -->

    <div class="super_container">
        <div class="super_container_inner">
            <div class="super_overlay"></div>

            <!-- Home -->

            <div class="products m-5" style="padding-top: 0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section_title text-center">Featured Products</div>
                        </div>
                    </div>

                    <div class="row products_row">

                        <!-- fetch Product -->
                        <?php
                        while ($data = mysqli_fetch_array($query)) {
                            echo '<div class="col-xl-3 col-md-3">
                            <div class="product">
                                <div class="product_image_showcase"><a href="product.php?id=' ?><?php echo $data[0] ?>"><?php echo '<img
                                            src="images/' ?><?php echo $data[5] ?>"<?php echo ' alt="" class="product_image_img"></a></div>
                                <div class="product_content">
                                    <div class="product_info align-items-center justify-content-center">
                                        <div style="text-align:center;">
                                            <i class="fa fa-star" style="color:#4a4a4a"></i>
                                            <i class="fa fa-star" style="color:#4a4a4a"></i>
                                            <i class="fa fa-star-half-full" style="color:#4a4a4a"></i>
                                            <i class="fa fa-star-o" style="color:#4a4a4a"></i>
                                            <i class="fa fa-star-o" style="color:#4a4a4a"></i>
                                        </div>

                                        <div>
                                            <div class="product_name">' ?><a href="product.php?id=<?php echo $data[0] ?>"><?php echo $data[1] ?><?php echo '</a></div>
                                            <div class="product_text">Stock: <?php echo $data[2]?></div>
                                        </div>
                                        <div
                                            class="product_info d-flex flex-row align-items-start justify-content-start">
                                            
                                        </div>
                                        <div class="product_price">RS.' ?><?php echo $data[4] ?><?php echo '</div>
                                    </div>

                                    <div class="product_buttons">
                                        <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                            <div title="Add to wish list"
                                                class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                <div>
                                                    <div><img src="images/heart_2.svg" class="svg" alt="">
                                                        <div>+</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div title="Add to shopping cart"
                                                class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                <div>
                                                    <div><img src="images/cart.svg" class="svg" alt="">
                                                        <div>+</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> ';
                                                                                            } ?>

                    </div>

                </div>

            </div>

            <?php
            include("footer.php");
            ?>