<?php
include "../connection.php";
session_start();
if($_SESSION['admin_username']=="")
{
    echo '<script>window.location.href="login.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- edit-profile23:03-->
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                <div class="col-sm-12 col-8 text-right m-b-20">
                        <a href="products.php" class="btn btn-primary btn-rounded float-right"><i class="fa fa-user-md"></i> Show Products</a>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data">
                    <div class="card-box">
                        <h3 class="card-title">Product Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="assets/img/user.jpg" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text" id="img">Choose Image</span>
                                        <span class="btn-text" id="img_error" style="display: none;">Please Choose Image </span>
                                        <input class="upload" type="file" name="product_image">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Product Name</label>
                                                <input name="product_name" id="name" type="text" class="form-control floating" >
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Available Stock</label>
                                                <input name="product_stock" id="stock" type="text" class="form-control floating" >
                                            
                                            </div> 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                            <label class="focus-label">Category</label>
                                                <select name="category" class="form-control floating" id="category">
                                                    <option ></option>
                                                    <?php
                                                   
                                                    $query =$object->select_category();
                                                   while( $data = mysqli_fetch_array($query))
                                                   {
                                                        echo '<option value="'.$data[0].'" >'.$data[1].'</option>';
                                                   }
                                                    ?>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Product Price</label>
                                                <input name="product_price" id="price" type="text" class="form-control floating" >
                                            
                                            </div> 
                                            </div> 
                                            <div class="col-md-6">
                                            <div class="form-group form-focus">
                                            <label class="focus-label">Product Type</label>
                                                <select name="product_type" class="form-control floating" id="type">
                                                <option value=""></option>   
                                                <option value="Featured"> Featured</option>
                                                    <option value="Simple"> Simple</option>
                                                   
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Product Description</label>
                                                <input name="product_desc" id="desc" type="text" class="form-control floating" >
                                            
                                            </div> 
                                        </div>
                                            </div>
                                            <div class="m-t-20 text-center">
                                <input type="submit" class="btn btn-primary submit-btn" name="add" value="Add product">
                            </div>
                                        </div>


                                    
                                      
                                        
                                      

                                   
                                        </div>

                    </div>
                                                </form>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- edit-profile23:05-->
</html>
<?php
if(isset($_POST['add']))
{
    $product_name = $_POST['product_name'];
    $product_stock = $_POST['product_stock'];
    $category = $_POST['category'];
    $product_price = $_POST['product_price'];
    $product_type = $_POST['product_type'];
     $product_desc = $_POST['product_desc'];
   $product_image = $_FILES['product_image']['name'];
    $image_location = $_FILES['product_image']['tmp_name'];
     $txt=pathinfo($product_image,PATHINFO_EXTENSION);
    if($product_name== "" )
    {
        echo '<script>
        var error=document.getElementById("name");
        error.style.border="1px solid red";
    </script>';
    }
    if($product_stock== "" )
    {
        echo '<script>
        var error=document.getElementById("stock");
        error.style.border="1px solid red";
    </script>';
    }
    if($product_desc== "" )
    {
        echo '<script>
        var error=document.getElementById("desc");
        error.style.border="1px solid red";
    </script>';
    }
    if($category== "" )
    {
        echo '<script>
        var error=document.getElementById("category");
        error.style.border="1px solid red";
    </script>';
    }
    if($product_price== "" )
    {
        echo '<script>
        var error=document.getElementById("price");
        error.style.border="1px solid red";
    </script>';
    }
    if($product_type== "" )
    {
        echo '<script>
        var error=document.getElementById("type");
        error.style.border="1px solid red";
    </script>';
    }
    if($product_image== "" )
    {
        echo '<script>
        var error=document.getElementById("img_error");
        error.style.display="block";
       
        var e_error=document.getElementById("img");
        e_error.style.display="none";
    </script>';
    }
    
    if($product_name !="" & $product_stock !="" & $category !="" & $product_price !="" & $product_type !=""  & $product_image !="" & $product_desc !="" )
    {
        
        $query =$object->select_product_name($product_name);
     $row = mysqli_num_rows($query);
    if($row==1)
    {
        echo '<script>swal("OOps", "Product Already Exists", "error")</script>';
    }

   

    else
    {
        if($txt=="jpg" or $txt=="png" or $txt=="jpeg"  )
        {
             move_uploaded_file($image_location, "../images/" . $product_image);
          $done=  $object->insert_product($product_name ,$product_stock, $category , $product_price ,$product_image,$product_type,$product_desc);
          if($done == 1)
          {
           echo '<script>swal("Done", "Product Added Successfully", "success")</script>';
          }
          else
          {
            echo '<script>swal("Failed", "Product Not Added ", "error")</script>';
           }

        }
        else
        {
            echo '<script>swal("Failed", "Image Must Be In .jpg  / .png  / .jegp  format", "error")</script>';
         
        }
    }


    }
}

?>