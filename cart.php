<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['cart'])) {
    echo '<script>window.location.href="shop.php"</script>';
}
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
    <title>Ustora Demo</title>

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

<body>
    <?php
    include("header.php")
    ?>


    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                            foreach ($_SESSION['cart'] as $p => $value) {
                                                $q = $obj->product_data_cart($p);
                                                $dta = mysqli_fetch_array($q);
                                                echo '
                                               <form method ="post">  <tr class="cart_item">
                                            
                                                 <td class="product-remove">
                                                     <a title="Remove this item" class="remove" href="?id=' . $dta[0] . '">×</a>
                                                 </td>
     
                                                 <td class="product-thumbnail">
                                                     <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="images/' . $dta[5] . '"></a>
                                                 </td>
     
                                                 <td class="product-name">
                                                     <a href="single-product.html">' . $dta[1] . '</a>
                                                 </td>
     
                                                 <td class="product-price">
                                                     <span class="amount"> Rs' . $dta[4] . '</span>
                                                     <input class="iprice" type="hidden" value="' . $dta[4] . '" />
                                                 </td>
     
                                                 <td class="product-quantity">
                                                     <div class="quantity buttons_added">
                                                        
                                                         <input type="number" size="4" name="quantity"  onchange="subTotal()" class="iquntity input-text qty text" title="Qty" value="' . $value . '"  >
                                                     
                                                       </form>
                                                     </div>
                                                 </td>
                                                    ';
                                                    ?>

                                        <?php
                                                $amount = $dta[4] * $value;
                                                if (isset($_POST['update'])) {

                                                    $qty = $_POST['quantity'];

                                                    $amount = $dta[4] * $qty;
                                                }
                                               

                                                echo '
                                                <td class="itotal"><td/>
                                             </tr>
                                             <tr>';
                                            }
                                            if (isset($_GET['id'])) {
                                                $id = $_GET['id'];

                                                unset($_SESSION['cart'][$p]);
                                            }
                                        }



                                        ?>

                                        <?php
                                        if (isset($_SESSION['cart'])) {
                                        } else {
                                            echo "<script>window.location.href='shop.php';</script>";
                                        }

                                        ?>

                                        <td class="actions" colspan="6">
                                            <!-- <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                    <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                                </div>
                                                <input type="submit" value="Update Cart" name="update_cart" class="button"> -->
                                            <form method="post"></form><input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                            </form>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                            </form>
                        </div>
                   

                        <div class="cart-collaterals">





                            <div class="cart_totals col-md-4">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <!-- <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount" ></span></td>
                                        </tr> -->

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Grand Total</th>
                                           <form  method="post"> <td><strong><span class="amount" id="gtotal" name="gt" ></span></strong> </td>
                                        </form></tr>

                                    </tbody>
                                    <?php
 if (isset($_POST['proceed'])) {
    if (isset($_SESSION['login_id'])) {
    
    
    if(isset($_SESSION['cart']))
    {
        foreach ($_SESSION['cart'] as $p =>$value)
        {
            $qty = $_POST['quantity'];
            $value = 0;
            $_SESSION['cart'][$p] = $value+ $qty;
        }
        $_SESSION['grand'] =  $_POST['gt'] ;
    }
        
           
            
        
        echo '<script>window.location.href="checkout.php"</script>';
       
     
    } else {
        echo '<script>window.location.href="login.php"</script>';
    }
}

                        ?>
                                                 
                                </table>


                            </div>


                            <!-- <div class="col-25">
                    <div class="container">
                        <h4>Cart
                            <span class="price" style="color:black">
                                <i class="fa fa-shopping-cart"></i>
                                <b>4</b>
                            </span>
                        </h4>
                        <p><a href="#">Product 1</a> <span class="price">$15</span></p>
                        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
                        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
                        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
                        <hr>
                        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                    </div>
                </div> -->



                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    </div>
    </div>
    </div>

    <?php
    include("footer.php")
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
</body>

</html>
<script>
    gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquntity = document.getElementsByClassName('iquntity');
    var itotal = document.getElementsByClassName('itotal');
    gtotal = document.getElementById('gtotal');

    function subTotal() {
        gt = 0;
        for (i = 0; i < iprice.length; i++) {
            itotal[i].innerText = (iprice[i].value) * (iquntity[i].value);

            gt = gt + (iprice[i].value) * (iquntity[i].value);
        }
        gtotal.innerText = gt;
    }
    subTotal();
</script>