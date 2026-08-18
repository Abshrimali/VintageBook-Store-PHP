<?php
session_start();

?>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vintage Books</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/logo/3-removebg-preview.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    
    #quote-carousel {
        padding: 0 10px 30px 10px;
        margin-top: 60px;
    }

    #quote-carousel .carousel-control {
        background: none;
        color: #CACACA;
        font-size: 2.3em;
        text-shadow: none;
        margin-top: 30px;
    }

    #quote-carousel .carousel-indicators {
        position: relative;
        right: 50%;
        top: auto;
        bottom: 0px;
        margin-top: 20px;
        margin-right: -19px;
    }

    #quote-carousel .carousel-indicators li {
        width: 50px;
        height: 50px;
        cursor: pointer;
        border: 1px solid #ccc;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        border-radius: 50%;
        opacity: 0.4;
        overflow: hidden;
        transition: all .4s ease-in;
        vertical-align: middle;
    }

    #quote-carousel .carousel-indicators .active {
        width: 128px;
        height: 128px;
        opacity: 1;
        transition: all .2s;
    }

    .item blockquote {
        border-left: none;
        margin: 0;
    }

    .item blockquote p:before {
        content: "\f10d";
        font-family: 'Fontawesome';
        float: left;
        margin-right: 10px;
    }
</style>
<?php
include("header.php");
?>

<!-- Slider -->
<div class="slider-area container-fluid">
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="https://booksservices.co.uk/wp-content/uploads/2022/06/The-Book-Club-Slider.jpeg" style="height: auto; background-size: cover;" alt="Slide">

            </li>

            <li>
                <img src="https://s26162.pcdn.co/wp-content/uploads/sites/3/2023/05/june-2023-picks-slider-960x430.jpg" style="height: auto; background-size: cover;" alt="Slide">

            </li>

            </li>
            <li>
                <img src="https://www.baobab-books.net/sites/default/files/slider-image/2021-05/slide-baobab-dabos.jpg" style="height: auto; background-size: cover;" alt="Slide">

            </li>

            <li>
                <img src="https://ittybittybookco.com/cdn/shop/files/Happiest-Gratitude-Journal-Slider_af5dba68-3f12-48d4-b23d-8cdeabfcbcd7_1800x.png?v=1614302523" style="height: auto; background-size: cover;" alt="Slide">

            </li>

        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>30 Days return</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Free shipping</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Secure payments</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>New products</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Featured Products</h2>
                    <div class="product-carousel">

                        <?php
                        // include "connection.php";
                        $q = $obj->select_product();
                        while ($data = mysqli_fetch_array($q)) {
                            echo '<div class="single-product">
                            <div class="product-f-image">
                                <img src="images/' . $data[5] . '" alt="">
                                <div class="product-hover">
                                ';?>
                                <?php   
                                if($data[3] == 0)
                                {
                                   
                                }
                                else {
                                   echo ' <a href="addcart.php?id=' . $data[0] . '" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>';
                                }
                                echo'
                                   
                                    <a href="spec_product.php?id=' . $data[0] . '" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                </div>
                            </div>

                            <h2><a href="spec_product.php?id=' . $data[0] . '">' . $data[1] . '</a></h2>

                            <div class="product-carousel-price">
                                <ins>RS.' . $data[4] . '<ins>
                            </div>
                        </div>';
                        }
                        ?>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->



<!-- Testimonial Start -->

<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="carousel slide" data-ride="carousel " id="quote-carousel">
                <h1 class="text-center">Testimonial</h1>
                <!-- Carousel Slides / Quotes -->
                <div class="carousel-inner text-center">
                    <!-- Quote 1 -->
                    <div class="item active">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                    <small>Someone famous</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Quote 2 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    <small>Someone famous</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Quote 3 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                    <small>Someone famous</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                    </li>
                    <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                    </li>
                    <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                    </li>
                </ol>

                <!-- Carousel Buttons Next/Prev -->
                <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->



<?php
include("footer.php");
?>

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="js/bxslider.min.js"></script>
<script type="text/javascript" src="js/script.slider.js"></script>

</body>

</html>