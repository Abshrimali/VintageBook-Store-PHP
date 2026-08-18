<?php
include "connection.php";
$obj = new data();
$conn = mysqli_connect("localhost","root","","vintage_book");
$conn;
$name;
if (isset($_SESSION["user_name"])) {
    $name = $_SESSION["user_name"];
} else {
    $name = "GUEST";
}
// echo $name;
?>

<body>

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="./images/logo/3-removebg-preview.png"  style="height: 100px;"></a></h1>
                    </div>
                </div>

                <div class="col-sm-6 ">
                    <div class="shopping-item" style="margin-top: 65px;">
                        <a href="cart.php"> <i class="fa fa-shopping-cart"></i> <span class="product-count"> <?php if (isset($_SESSION['cart'])) {
                                                                                                                    echo ' ' . COUNT($_SESSION['cart']) . ' ';
                                                                                                                } else {
                                                                                                                    echo '0';
                                                                                                                } ?> </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <!-- End mainmenu area -->
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-expand-md  bg-light">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="active nav-item">
                    <a class="nav-link" href="index.php"><span data-hover="Home">HOME </span> </a>
                </li>
                <li class="dropdown nav-item">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Depertment"><i class="fa fa-user-plus" aria-hidden="true" style='font-size:22px'></i>
                        CATEGORIES <i class="" aria-hidden="true"></i>
                    </span></a>
                    <ul class="dropdown-menu">
                        <?php
                        $q = $obj->show_category();
                        while ($data = mysqli_fetch_array($q)) {
                            echo '<li><a href="spec_category.php?id=' . $data[0] . '">' . $data[1] . '<i class="fa fa-chevron-right"></i></a>
';
                        }
                        ?>
                </li>
            </ul>
            </li>

            <li class="nav-item"><a class="nav-link" href="shop.php">SHOP PAGE</a></li>
            </li>
            <li class="nav-item"><a class="nav-link" href="about.php">ABOUT US</a></li>
            <li><a class="nav-link" href="contact.php">CONTACT</a></li>
            <?php
            if (isset($_SESSION["user_name"])) {
            ?>
                <li><a class="nav-link" href="profile.php">PROFILE</a></li>
                <li><a class="nav-link" href="allorders.php">ORDERS</a></li>
            <?php
            } else {
            ?>
            <?php
            }
            ?>
            <li class="dropdown nav-item">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Depertment"><i class="fa fa-user-plus" aria-hidden="true" style='font-size:22px'></i>
                        Hello , <?php echo $name ?> <i class="" aria-hidden="true"></i>
                    </span></a>
                <ul class="dropdown-menu">
                    <?php
                    if (isset($_SESSION["user_name"])) {
                    ?>
                        <li><a href="logout.php"><i class="fa fa-sign-in nav-link" aria-hidden="true" style='font-size:14px'>&#160&#160&#160</i>Logout</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true" style='font-size:14px'>&#160&#160&#160</i>Login / SignUp</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
        </div>
    </nav>
</div>

    <!-- Header navbar end -->
    <!-- <div class="header-area navbar-expand-lg navbar-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations-delay="1.8s" data-animations="fadeInUp">

                        <ul class="nav navbar-nav bg-none navbar-right style-3">

                            <li class="active">
                                <a href="index.php"><span data-hover="Home">HOME </span> </a>

                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Depertment">CATEGORIES <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $q = $obj->show_category();
                                    while ($data = mysqli_fetch_array($q)) {
                                        echo '<li><a href="spec_category.php?id=' . $data[0] . '">' . $data[1] . '<i class="fa fa-chevron-right"></i></a>
                            ';
                                    }
                                    ?>
                            </li>


                        </ul>
                        </li>

                        <li><a href="shop.php">SHOP PAGE</a></li>
                        </li>
                        <li><a href="about.php">ABOUT US</a></li>
                        <li><a href="contact.php">CONTACT</a></li>


                        <?php
                        if (isset($_SESSION["user_name"])) {
                        ?>
                            <li><a href="profile.php">PROFILE</a></li>
                        <?php
                        } else {
                        ?>

                        <?php
                        }
                        ?>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Depertment"><i class="fa fa-user-plus" aria-hidden="true" style='font-size:22px'></i>
                                    Hello , <?php echo $name ?> <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span></a>
                            <ul class="dropdown-menu">
                                <?php
                                if (isset($_SESSION["user_name"])) {
                                ?>
                                    <li><a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true" style='font-size:14px'>&#160&#160&#160</i>Logout</a>
                                    </li>
                                <?php
                                } else {
                                ?>
                                    <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true" style='font-size:14px'>&#160&#160&#160</i>Login / SignUp</a>
                                    </li>
                                <?php
                                }
                                ?>

                            </ul>
                    </div>
                </div>
            </div>
        </div>

    </div> -->
    <!-- </div> End header area -->
  