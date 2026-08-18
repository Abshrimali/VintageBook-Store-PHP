<?php
session_start();
if(!isset($_SESSION['cart']))
{
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
<style>
    .row {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap;
        /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        -ms-flex: 25%;
        /* IE10 */
        flex: 25%;
    }

    .col-50 {
        -ms-flex: 50%;
        /* IE10 */
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 75%;
        /* IE10 */
        flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
        padding: 0 16px;
    }

    .container {
        /* background-color: #f2f2f2; */
        padding: 5px 20px 15px 20px;
        /* border: 1px solid lightgrey; */
        border-radius: 3px;
    }

    input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }

    .btn {
        background-color: #04AA6D;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
    }

    .btn:hover {
        background-color: #45a049;
    }

    span.price {
        float: right;
        color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }

        .col-25 {
            margin-bottom: 20px;
        }
    }
</style>

<body>  
<?php  
include  ("header.php");
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
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-75">
                    <div class="container">
                        <form method="post">

                            <div class="row">
                                <div class="col-50">
                                    
                                    <h3>Billing Address</h3>
                                    <label for="fname"><i class="fa fa-user"></i>  Name</label>
                                    <input type="text" id="fname" name="name" value="<?php echo $_SESSION['user_name']?>" >
                                    <span id="name_error"></span>
                                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                    <input type="email" id="email" name="email" value="<?php echo $_SESSION['user_email']?>">
                                    <span id="email_error"></span>
                                    <label for="phone"><i class="fa fa-envelope"></i> Phone</label>
                                    <input type="text" id="phone" name="phone" value="">
                                    <span id="phone_error"></span>
                                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                    <span id="address_error"></span>
                                    <label for="city"><i class="fa fa-institution"></i> City</label>
                                    <input type="text" id="city" name="city" placeholder="karachi">
                                    <span id="city_error"></span>
                                    <label for="note"><i class="fa fa-institution"></i> Additional Note (Optional)</label>
                                    <input type="text"  id="note" name="note" placeholder="New York">
                                    <span id="note_error"></span>
                                    
                                    <!-- <div class="row">
                                        <div class="col-50">
                                            <label for="state">State</label>
                                            <input type="text" id="state" name="state" placeholder="NY">
                                        </div>
                                        <div class="col-50">
                                            <label for="zip">Zip</label>
                                            <input type="text" id="zip" name="zip" placeholder="10001">
                                        </div>
                                    </div> -->
                                </div>

                                <!-- <div class="col-50">
                                    <h3>Payment</h3>
                                    <label for="fname">Accepted Cards</label>
                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                                    </div>
                                    <label for="cname">Name on Card</label>
                                    <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                    <label for="ccnum">Credit card number</label>
                                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                    <label for="expmonth">Exp Month</label>
                                    <input type="text" id="expmonth" name="expmonth" placeholder="September">

                                    <div class="row">
                                        <div class="col-50">
                                            <label for="expyear">Exp Year</label>
                                            <input type="text" id="expyear" name="expyear" placeholder="2018">
                                        </div>
                                        <div class="col-50">
                                            <label for="cvv">CVV</label>
                                            <input type="text" id="cvv" name="cvv" placeholder="352">
                                        </div>
                                    </div>
                                </div>

                            </div> -->
                            <!-- <label>
                                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                            </label> -->
                            <input type="submit" name="order" value="Proceed to order" class="btn">
                        </form>
                    </div>
                </div>
                <?php 
                if(isset($_POST['order']))
                {
                    $name  = $_POST['name'];
                    $email  = $_POST['email'];
                    $phone  = $_POST['phone'];
                    $address  = $_POST['address'];
                    $city  = $_POST['city'];
                    $note  = $_POST['note'];
                     
                    if($name== "")
                    {
                        echo '<script>
                        var error=document.getElementById("name_error");
                        error.innerHTML="Please Enter Name";
                        error.style.color="red";
                        </script>';
                    }
                    if($email== "")
                    {
                        echo '<script>
                        var error=document.getElementById("email_error");
                        error.innerHTML="Please Enter Name";
                        error.style.color="red";
                        </script>';
                    }
                    if($phone== "")
                    {
                        echo '<script>
                        var error=document.getElementById("phone_error");
                        error.innerHTML="Please Enter Phone Number";
                        error.style.color="red";
                        </script>';
                    }
                    if($city== "")
                    {
                        echo '<script>
                        var error=document.getElementById("city_error");
                        error.innerHTML="Please Enter City";
                        error.style.color="red";
                        </script>';
                    }
                    if($address== "")
                    {
                        echo '<script>
                        var error=document.getElementById("address_error");
                        error.innerHTML="Please Enter address";
                        error.style.color="red";
                        </script>';
                    }
                    if($name != "" & $email!= "" & $phone!= "" & $address!= "" & $city!= "" )
                    {
                        if(isset($_SESSION['cart']))
                        {
                            foreach ($_SESSION['cart'] as $p => $value) 
                            {
                                
                                $a = $obj -> order_insert($p,$value,$name,$email,$address,$city,$note,$phone);
                                if($a == 1)
                                {
                                   
                                    $b = $obj->product_data($p);
                                    $row = mysqli_fetch_array($b);
                                    $q_qty = $row[3];
                                    $a= $obj->update_qty($q_qty,$value,$p);
                                    
                                        echo "<script>
                                        Swal.fire(
                                            'Thank you!',
                                            'Your Order Successfully Places',
                                            'success'
                                        );
                                        </script>";
                                        
                                        echo '<script>window.location.href="order.php"</script>';
                                 }
                            }
                       
                        
                        }
                    }
                }
                   
                
                
                ?>

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


    <?php
    include "footer.php";
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