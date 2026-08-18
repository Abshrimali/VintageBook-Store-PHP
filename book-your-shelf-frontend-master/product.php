<?php
include("connection.php");
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM `products` WHERE product_id = '$id'");
$data = mysqli_fetch_array($query);
include("header.php");
?>


<div class="super_container">

    <div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Breadcrumbs -->
        <div class="container">
            <div class="row products_bar_row">
                <div class="col">
                    <div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                        <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                            <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="category.html">Literature</a></li>
                                <li style="color: #fbaa1d">Animal Farm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product -->
        <div class="product_panel">
            <div class="container">
                <div class="row">

                    <!-- Product Image -->
                    <div class="col-lg-4">
                        <div class="product_image_slider_container">
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="images/<?php echo $data[5] ?>" />
                                    </li>
                                    <li>
                                        <img src="images/<?php echo $data[5] ?>" />
                                    </li>
                                    <li>
                                        <img src="images/<?php echo $data[5] ?>" />
                                    </li>
                                    <li>
                                        <img src="images/<?php echo $data[5] ?>" />
                                    </li>
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="images/<?php echo $data[5] ?>" />
                                    </li>
                                    <li>
                                        <img src="images/<?php echo $data[5] ?>" />
                                    </li>
                                    <li>
                                        <img src="images/<?php echo $data[5] ?>" />
                                    </li>
                                    <li>
                                        <img src="images/<?php echo $data[5] ?>" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="col-lg-8 product_col">
                        <div class="product_info">
                            <span class="product_name"><?php echo $data[1]?></span>
                            <div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
                                <div style="text-align:center;">
                                    <i class="fa fa-star" style="color:#4a4a4a"></i>
                                    <i class="fa fa-star" style="color:#4a4a4a"></i>
                                    <i class="fa fa-star-half-full" style="color:#4a4a4a"></i>
                                    <i class="fa fa-star-o" style="color:#4a4a4a"></i>
                                    <i class="fa fa-star-o" style="color:#4a4a4a"></i>
                                </div>
                                <div class="product_reviews">4.7 out of (143)</div>
                                <div class="product_reviews_link"><a href="#product_description_area" id="show_review">Review</a>
                                </div>
                            </div>
                            <div class="sale_price_container align-items-start justify-content-start">

                            </div>
                            <div class="product_price">RS.<?php echo $data[4] ?></span></div>

                            <div class="product_text">
                                <p><?php echo $data[2] ?></p>
                            </div>
                            <div class="product_buttons">
                                <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                    <div title="Add to wish list" class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                        <div>
                                            <div><img src="images/heart_2.svg" class="svg" alt="">
                                                <div>+</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div title="Add to shopping cart" class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                        <div>
                                            <div><img src="images/cart.svg" class="svg" alt="">
                                                <div>+</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div title="Add reminder" class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                        <div>
                                            <div><img src="images/notification.svg" class="svg" alt="">
                                                <div>+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--================Product Description Area =================-->
        <section class="product_description_area" id="product_description_area">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DESCRIPTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SPECIFICATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">REVIEWS</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem.
                            Maecenas elementum at diam consequat bibendum. Mauris iaculis fringilla ex, sit amet
                            semper libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed
                            velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet.
                            Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies
                            velit vel accumsan porta.</p>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5>Width</h5>
                                        </td>
                                        <td>
                                            <h5>128mm</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Height</h5>
                                        </td>
                                        <td>
                                            <h5>508mm</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Depth</h5>
                                        </td>
                                        <td>
                                            <h5>85mm</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>Weight</h5>
                                        </td>
                                        <td>
                                            <h5>52gm</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row total_rate">
                                    <div class="col-6">
                                        <div class="box_total">
                                            <h5>Overall</h5>
                                            <h4>4.0</h4>
                                            <h6>(03 Reviews)</h6>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="rating_list">
                                            <h3>Based on 3 Reviews</h3>
                                            <ul class="list">
                                                <li><a>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        1</a></li>
                                                <li><a>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                        1</a></li>
                                                <li><a>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                        <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                        1</a></li>
                                                <li><a>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                        <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                        <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                        1</a></li>
                                                <li><a>
                                                        <i class="fa fa-star" style="color:#fbd600"></i>
                                                        <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                        <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                        <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                        <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                        1</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Sort orders -->
                                <div class="products_bar_side d-flex flex-row align-items-start justify-content-start ml-lg-auto">
                                    <div class="products_dropdown product_dropdown_sorting">
                                        <div class="isotope_sorting_text"><span>Sort</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                                        <ul>
                                            <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'>Date
                                            </li>
                                            <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "user-name" }'>User Name
                                            </li>
                                            <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "user-surname" }'>User Surname
                                            </li>
                                            <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "decr-rate" }'>Decreasing Rate
                                            </li>
                                            <li class="item_sorting_btn" data-isotope-option='{ "sortBy": "incr-rate" }'>Increasing Rate
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <br>

                                <div class="review_list">
                                    <div class="review_item">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <h4>Jane Doe</h4>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h5 class="date">01.03.2020</h5>
                                                    </div>
                                                </div>
                                                <i class="fa fa-star" style="color:#fbd600"></i>
                                                <i class="fa fa-star" style="color:#fbd600"></i>
                                                <i class="fa fa-star-half-full" style="color:#fbd600"></i>
                                                <i class="fa fa-star-o" style="color:#fbd600"></i>
                                                <i class="fa fa-star-o" style="color:#fbd600"></i>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea
                                            commodo</p>
                                    </div>
                                    <br>
                                    <div class="review_item">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <h4>John Doe</h4>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h5 class="date">23.02.2020</h5>
                                                    </div>
                                                </div>
                                                <i class="fa fa-star" style="color:#fbd600"></i>
                                                <i class="fa fa-star" style="color:#fbd600"></i>
                                                <i class="fa fa-star" style="color:#fbd600"></i>
                                                <i class="fa fa-star-half-full" style="color:#fbd600"></i>
                                                <i class="fa fa-star-o" style="color:#fbd600"></i>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea
                                            commodo</p>
                                    </div>
                                    <br>
                                    <div class="review_item">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <h4>Jane Doe</h4>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h5 class="date">02.02.2020</h5>
                                                    </div>
                                                </div>
                                                <i class="fa fa-star" style="color:#fbd600"></i>
                                                <i class="fa fa-star" style="color:#fbd600"></i>
                                                <i class="fa fa-star" style="color:#fbd600"></i>
                                                <i class="fa fa-star" style="color:#fbd600"></i>
                                                <i class="fa fa-star-half-full" style="color:#fbd600"></i>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et
                                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea
                                            commodo</p>
                                    </div>

                                    <div class="row page_nav_row">
                                        <div class="col">
                                            <div class="page_nav">
                                                <ul class="d-flex flex-row align-items-start justify-content-center">
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#" style="color: #fbaa1d;">2</a></li>
                                                    <li><a href="#" style="color: #fbaa1d;">3</a></li>
                                                    <li><a href="#" style="color: #fbaa1d;">4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- No reviews -->
                                <div class="warning-text" style="font-size: 18px; display: none">There are no reviews.
                                    Be the first to review!
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="review_box">
                                    <h4>Add a Review</h4>
                                    <fieldset class="rating">
                                        <input type="radio" id="star5" name="rating" value="5" /><label class="full review-star-cursor" for="star5" title="Excellent - 5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label class="full review-star-cursor" for="star4" title="Very good - 4 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label class="full review-star-cursor" for="star3" title="Good - 3 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label class="full review-star-cursor" for="star2" title="Bad - 2 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label class="full review-star-cursor" for="star1" title="Very bad- 1 star"></label>
                                    </fieldset>
                                    <br>
                                    <form action="#/" class="form-contact form-review mt-3">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" type="text" placeholder="Specify Your Review Title (Optional)">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control different-control w-100" name="textarea" id="textarea" cols="30" rows="5" placeholder="Write Your Review"></textarea>
                                        </div>
                                        <div class="form-group text-center text-md-right mt-3">
                                            <button type="submit" class="button button--active button-review">SUBMIT
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Description Area =================-->

        <div class="products" style="padding-top: 0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section_title text-center">Our Picks For You</div>
                    </div>
                </div>

                <div class="row products_row">

                    <!-- Product -->
                    <?php
                    $select = mysqli_query($conn, "select * from products where product_type = 'popular'");
                    $a = mysqli_fetch_array($select);
                    $num = 0;
                    while($num < 4){
                    echo '<div class="col-xl-3 col-md-3">
                   <div class="product">
                       <div class="product_image_showcase"><a href="product.php?id=' ?><?php echo $a[0] ?>"><?php echo '<img
                                   src="images/' ?><?php echo $a[5] ?>"<?php echo ' alt="" class="product_image_img"></a></div>
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
                                   <div class="product_name">'?><a href="product.php?id=<?php echo $a[0] ?>"><?php echo $a[1] ?><?php echo '</a></div>
                                   <div class="product_text">Stock: '?><?php echo $data[3]?><?php echo' </div>
                               </div>
                               <div
                                   class="product_info d-flex flex-row align-items-start justify-content-start">
                                   
                               </div>
                               <div class="product_price">RS.' ?><?php echo $a[4] ?><?php echo '</div>
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
               $num++;
               } ?>

                        
                </div>
            </div>
        </div>

        <!-- Footer -->
 <?php
 include ("footer.php");
 ?>