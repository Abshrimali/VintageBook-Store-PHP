<?php
class data{
private $connect;
function __construct(){

$con=mysqli_connect("localhost","root","","vintage_book");
$this->connect=$con;
}

function insert($category_name,$main_image){

    $query=mysqli_query($this->connect, "INSERT INTO `category`(`category_id`, `category_name`, `main_image`) VALUES ('','$category_name','$main_image')");
return $query;
}
function select_specific($category_name){

    $query=mysqli_query($this->connect, "SELECT * FROM `category` WHERE category_name='$category_name'");
    return $query;
}
function select_order(){

    $query=mysqli_query($this->connect, "SELECT * FROM `orders` WHERE product_id='$_SESSION[product_id]' & 
    order_qty = '$_SESSION[qty]' & order_time =now() " );
    return $query;
}
function admin_sel(){


$query=mysqli_query($this->connect,"SELECT * FROM `admin` WHERE admin_id=$_SESSION[admin_id]");
return $query;

}
function select_category(){

    $query = mysqli_query($this->connect, "SELECT * FROM `category`");
          return $query;                                        
}
function count_orders(){

    $qs = mysqli_query($this->connect, "SELECT COUNT(order_id) FROM `orders`");
return  $qs;
}

function count_specific_appointment(){

    $qs = mysqli_query($this->connect, "SELECT COUNT(appointment_id) FROM `appointment` INNER JOIN doctor ON doctor_id=d_id WHERE d_id=$_SESSION[admin_id]");
return  $qs;
}

function appointment_info(){

    $query= mysqli_query($this->connect, "SELECT * FROM `appointment` INNER JOIN `doctor` ON d_id=doctor_id  ORDER BY appointment_id DESC");
return $query;
}

function appointment_information(){

    $query= mysqli_query($this->connect, "SELECT * FROM `appointment` INNER JOIN `doctor` ON d_id=doctor_id  ");
return $query;
}
function contact_count(){

    $query = mysqli_query($this->connect, "SELECT count(contact_messege) FROM `contact`");
return $query; 
}
function contact_information(){

$query=mysqli_query($this->connect, "SELECT * FROM `contact` ORDER By contact_id DESC");
return $query;
}
function contact_select(){
    $qu = mysqli_query($this->connect, "SELECT * FROM `contact` ORDER BY contact_id DESC");
       return $qu;            
}

function contact(){
    $qu = mysqli_query($this->connect, "SELECT * FROM `contact");
       return $qu;            
}

function admin_login($admin_email,$admin_password){

    $query = mysqli_query($this->connect, "SELECT * FROM `admin` where admin_email='$admin_email' and admin_password='$admin_password' ");
return $query;
}
function doctor_login($admin_email,$admin_password){

    $query=mysqli_query($this->connect, "SELECT * FROM `doctor` where doctor_email='$admin_email' and doctor_password='$admin_password' ");
return $query;
}
function register($admin_username,$admin_email,$admin_password,$admin_contact){

    $query = mysqli_query($this->connect, "INSERT INTO `admin`(`admin_username`, `admin_email`, `admin_password`, 
    `admin_contact`)  VALUES ('$admin_username','$admin_email','$admin_password','$admin_contact')");
return $query;
}
function admin_update($admin_username,$admin_email,$admin_password,$admin_contact,$admin_image){

    $query = mysqli_query($this->connect, "UPDATE `admin` SET `admin_username`='$admin_username',`admin_email`='$admin_email',
    `admin_password`='$admin_password',`admin_contact`='$admin_contact',`admin_image`='$admin_image' WHERE admin_id= '$_SESSION[admin_id]'");
    return $query;


}

function specific_category($category_id){

    $query = mysqli_query($this->connect, "SELECT * FROM `category` WHERE category_id=$category_id");
  return $query; 
}
function category_edit($category_name,$main_image,$category_id){

$query = mysqli_query($this->connect, "UPDATE `category` SET `category_name`='$category_name'
,`main_image`='$main_image' WHERE category_id=$category_id");
return $query;

}
function show_category(){

    $query=mysqli_query($this->connect, "SELECT * FROM `category` ");
return $query;
}
function search($search){

    $query=mysqli_query($this->connect, "SELECT * FROM products
    WHERE product_name LIKE '$search%' Or '%$search%' or '%$search'
    
            ");
return $query;
}
function delete_category($category_id){

    $query = mysqli_query($this->connect, "DELETE FROM `category` WHERE category_id=$category_id");
  return $query;
}

function category_count(){

    $query=mysqli_query($this->connect, "SELECT COUNT(category_id) FROM `category`  ");
return $query;
}
function patient_data(){

    $qu = mysqli_query($this->connect, "SELECT * FROM `patient` WHERE  patient_Id=$_SESSION[patient_id]");
    return $qu;
}
function patient_update($admin_fname,$admin_lname,$admin_email,$admin_password,$admin_contact){

    $query = mysqli_query($this->connect, "UPDATE `patient` SET `patient_fname`='$admin_fname',`patient_lname`='$admin_lname',`patient_email`='$admin_email',`patient_password`='$admin_password',`patient_contact`='$admin_contact' WHERE patient_id=$_SESSION[patient_id]");
return $query;

}
function session_patient(){

$query=mysqli_query($this->connect,"SELECT * FROM `patient` WHERE patient_Id=$_SESSION[patient_id]");
return $query;
}
function patient_register($admin_fname,$admin_lname,$admin_email,$admin_password,$admin_contact){

    $query = mysqli_query($this->connect, "INSERT INTO `patient`(`patient_fname`,`patient_lname`, `patient_email`, `patient_password`, 
    `patient_contact`)  VALUES ('$admin_fname','$admin_lname','$admin_email','$admin_password','$admin_contact')");
    return $query;

}
function book_count(){

$query=mysqli_query($this->connect, "SELECT COUNT(product_id) FROM `products` ");
return $query;
}
function view_order(){

    $query=mysqli_query($this->connect, "SELECT * FROM orders as o INNER JOIN products as p ON o.product_id = p.product_id  ORDER BY(order_id) DESC");
    return $query;
    }
    function view_com_order(){

        $query=mysqli_query($this->connect, "SELECT * FROM orders as o INNER JOIN products as p ON o.product_id = p.product_id WHERE order_status='Completed' ORDER BY(order_id) DESC");
        return $query;
        }
        function count_can_order(){

            $query=mysqli_query($this->connect, "SELECT COUNT(order_id) FROM orders  WHERE order_status='Cancelled' ");
            return $query;
            }
            function count_pro_order(){

                $query=mysqli_query($this->connect, "SELECT COUNT(order_id) FROM orders  WHERE order_status='Processing' ");
                return $query;
                }
                function count_com_order(){

                    $query=mysqli_query($this->connect, "SELECT COUNT(order_id) FROM orders  WHERE order_status='Completed' ");
                    return $query;
                    }
        function view_can_order(){

            $query=mysqli_query($this->connect, "SELECT * FROM orders as o INNER JOIN products as p ON o.product_id = p.product_id WHERE order_status='Cancelled' ORDER BY(order_id) DESC");
            return $query;
            }
            function view_pro_order(){

                $query=mysqli_query($this->connect, "SELECT * FROM orders as o INNER JOIN products as p ON o.product_id = p.product_id WHERE order_status='Processing' ORDER BY(order_id) DESC");
                return $query;
                }
function user_count(){
    $query=mysqli_query($this->connect, "SELECT COUNT(id) FROM `user_login` ");
    return $query;
}
function profile_update($admin_username,$admin_email,$admin_password,$admin_contact,$admin_image){

$query=mysqli_query($this->connect, "UPDATE `admin` SET `admin_username`='$admin_username',`admin_email`='$admin_email',
`admin_password`='$admin_password',`admin_contact`='$admin_contact',`admin_image`='$admin_image' WHERE admin_id= '$_SESSION[admin_id]'");
return $query;

} 
function appointment_detail(){

    $query=mysqli_query($this->connect, "SELECT * FROM `appointment` INNER JOIN `doctor` ON d_id=doctor_id  ORDER BY appointment_id DESC");
    return $query;


}
function select_product_name($product_name){

    $query = mysqli_query($this->connect, "SELECT * FROM `products` WHERE product_name='$product_name'");
return $query;
}
function doctor_department(){

    $query = mysqli_query($this->connect, "SELECT * FROM `doctor` 
    INNER JOIN doctor_speciality ON doctor_speciality=speciality_id");
    return $query;
}
// zaroori
function category_join($category_id){

    $query = mysqli_query($this->connect, "SELECT * FROM `products` 
    INNER JOIN category ON category_id=cat_id WHERE category_id=$category_id");
    return $query;
}

function select_product(){
    $query = mysqli_query($this->connect,"SELECT * FROM `products` ");
    return $query;
}
function select_order_id($id){
    $query = mysqli_query($this->connect,"SELECT * FROM `orders` WHERE order_id=$id ");
    return $query;
}
function cat_product($category_id){
    $query = mysqli_query($this->connect,"SELECT * FROM `products` WHERE cat_id= $category_id");
    return $query;
}
function spec_product($id){
    $query = mysqli_query($this->connect,"SELECT * FROM `products` where product_id = $id");
    return $query;
}
function up_product($old_qty,$qty,$pr_id){
    $query = mysqli_query($this->connect,"UPDATE `products` SET `product_stock`=$old_qty + $qty WHERE product_id=$pr_id ");
    return $query;
}
function insert_product($product_name ,$product_stock, $category , $product_price ,$product_image,$product_type,$product_desc)
{


    $query=mysqli_query($this->connect, "INSERT INTO `products`(`product_name`,`product_desc`, `product_stock`, 
    `product_price`, `product_image`, `cat_id`,`product_type`) VALUES ('$product_name' ,'$product_desc','$product_stock', '$product_price' ,'$product_image', '$category','$product_type' )");
return $query;
}

function insert_doctor_self($doctor_fname,$doctor_lname,
$doctor_speciality,$doctor_gender,$doctor_email,$doctor_city,$doctor_country,$doctor_contact,
$doctor_password,$day_1,$day_2,$doctor_image,$doctor_time1,$doctor_time2,$doctor_degree1,$doctor_degree2)
{


    $query=mysqli_query($this->connect, "INSERT INTO `doctor`(`doctor_fname`, `doctor_lname`, 
    `doctor_speciality`, `doctor_gender`, `doctor_email`, `doctor_city`, `doctor_country`,
    `doctor_contact`, `doctor_password`, `day_1`, `day_2`, `doctor_image`, `doctor_time1`, `doctor_time2`, `doctor_degree1`, `doctor_degree2`, `doctor_status`) VALUES ('$doctor_fname','$doctor_lname',
    '$doctor_speciality','$doctor_gender','$doctor_email','$doctor_city','$doctor_country','$doctor_contact',
    '$doctor_password','$day_1','$day_2','$doctor_image','$doctor_time1','$doctor_time2','$doctor_degree1','$doctor_degree2','Not-Available')");
return $query;
}
function product_data($product_id){

    $query = mysqli_query($this->connect, "SELECT * FROM `products` 
    INNER JOIN category ON category_id=cat_id where product_id=$product_id");
    return $query;

}
function product_data_cart($p){

    $query = mysqli_query($this->connect, "SELECT * FROM `products` 
    INNER JOIN category ON category_id=cat_id where product_id=$p");
    return $query;

}
function order_insert($product_id,$qty,$name,$email,$address,$city,$note,$phone){

    $query = mysqli_query($this->connect, "INSERT INTO `orders`(`client_id`, `product_id`, `order_time`,`order_status`,`order_qty`
    , `name`, `email`, `address`, `city`, `note`, `contact`)
     VALUES ('$_SESSION[login_id]','$product_id',now(),'Processing' ,'$qty','$name','$email','$address','$city','$note','$phone')");
    return $query;

}
function update_qty($q_qty,$qty,$product_id){

    $q = mysqli_query($this->connect, "UPDATE `products` SET `product_stock`=$q_qty - $qty WHERE product_id= $product_id");
return $q;
}

function ins_shipping($name,$email,$address,$city,$note,$phone,$order_id){

    $q = mysqli_query($this->connect, "INSERT INTO `shipping`(`shipping_name`, `shipping_email`, `shipping_address`, `shipping_city`, `shipping_note`, `shipping_for`,`shipping_contact`,`od_id`)
     VALUES ('$name','$email','$address','$city','$note','$_SESSION[login_id]','$phone','$order_id')");
return $q;
}
function order_status($id, $status){

    $q = mysqli_query($this->connect, "UPDATE `orders` SET `order_status`='$status' WHERE order_id=$id");
return $q;
}
function sel_doc($id){

    $q = mysqli_query($this->connect, "SELECT * FROM `doctor` where doctor_id=$id ");
return $q;
}

function session_doc(){

$query=mysqli_query($this->connect,"SELECT * FROM `doctor` WHERE doctor_id=$_SESSION[admin_id]");
return $query;
    
}

function show_products(){

    $query = mysqli_query($this->connect, "SELECT * FROM `products` 
    INNER JOIN category ON category_id=cat_id  ORDER BY product_id DESC ");
return $query;   

}
function show_feaproducts(){

    $query = mysqli_query($this->connect, "SELECT * FROM `products` 
    INNER JOIN category ON category_id=cat_id  WHERE product_type='Featured'  ");
return $query;   

}
function show_simproducts(){

    $query = mysqli_query($this->connect, "SELECT * FROM `products` 
    INNER JOIN category ON category_id=cat_id  WHERE product_type='Simple' ORDER BY product_id DESC ");
return $query;   

}
function footer(){

    $q = mysqli_query($this->connect, "SELECT * FROM `doctor_speciality` WHERE speciality_id<=7");
                         return $q;

}

function product_update($product_name,$product_desc,$product_stock,$product_price,$product_image,$category,$product_type,$product_id){

    $query = mysqli_query($this->connect, "UPDATE `products` SET `product_name`='$product_name ',
  `product_desc` ='$product_desc',`product_stock`='$product_stock',`product_price`='$product_price'
    ,`Product_Image`='$product_image',`cat_id`='$category',`product_type`='$product_type' WHERE `product_id`= $product_id");
return $query;
}

function registration_request($doctor_id){

$query=mysqli_query($this->connect,"UPDATE `doctor` SET `doctor_status`='Available' WHERE doctor_id='$doctor_id'");
return $query;
}
function notregistered_doctors(){
    $query = mysqli_query($this->connect, "SELECT * FROM `doctor` 
    INNER JOIN doctor_speciality ON doctor_speciality=speciality_id WHERE doctor_status='Not-Available'");
return $query;
}

function select_doctor_fid($department_id){

    $query = mysqli_query($this->connect, "SELECT * FROM `doctor` INNER JOIN doctor_speciality ON doctor_speciality=speciality_id where doctor_speciality= $department_id");
                               return  $query;
}
function app_session()
{

    $query=mysqli_query($this->connect, "SELECT * FROM `appointment` INNER JOIN `doctor` ON d_id=doctor_id  WHERE pat_id=$_SESSION[patient_id]");
    return $query;
}
function delete_product($product_id){
 $query = mysqli_query($this->connect, "DELETE FROM `products` WHERE product_id='$product_id'");
   return $query;
}
function get_doctor_session(){

    $query=mysqli_query($this->connect,"SELECT * FROM  doctor  where doctor_id=$_SESSION[doctor_id]");
return $query;
}
function select_doctor_id($doctor_id){

    $query = mysqli_query($this->connect, "SELECT * FROM `doctor`  where doctor_id=$doctor_id");
    return $query;
}

function search_appointment($search){

$query=mysqli_query($this->connect,"SELECT * FROM `appointment` INNER JOIN `doctor` ON d_id=doctor_id WHERE appointment_phone LIKE '%$search%' ");
return $query;


}


function users()
{
    $query = mysqli_query($this->connect, "SELECT * FROM `user_login`  ORDER By id DESC ");
return $query;
}
function specific_patient(){
    $query = mysqli_query($this->connect, "SELECT * FROM `appointment` INNER JOIN  patient ON patient_Id=pat_id WHERE patient_Id=$_SESSION[patient_id]");
    return $query;
}
function specifc_appoinment(){

    $query = mysqli_query($this->connect, "SELECT * FROM `appointment` INNER JOIN `doctor` ON d_id=doctor_id WHERE doctor_id=$_SESSION[admin_id] ORDER BY appointment_id DESC");
return $query;
}
function specifc_appoinment_2(){

    $query = mysqli_query($this->connect, "SELECT * FROM `appointment` INNER JOIN `doctor` ON d_id=doctor_id WHERE doctor_id=$_SESSION[admin_id] ");
return $query;
}
function patient_detial($appointment_id){


    $query = mysqli_query($this->connect, "SELECT * FROM `appointment` INNER JOIN `doctor` ON d_id=doctor_id   WHERE appointment_id=$appointment_id");
return $query;
}

function select_patient_email($patient_email,$patient_password){

    $query = mysqli_query($this->connect, "SELECT * FROM `patient` WHERE patient_email='$patient_email' AND patient_password='$patient_password' ");
    return $query;
}

function forgot_pass($patient_email,$patient_password){

    $query = mysqli_query($this->connect, "SELECT * FROM `patient` WHERE patient_email='$patient_email' AND patient_fname='$patient_password' ");
    return $query;
}

function pass_update($patient_password){

$query=mysqli_query($this->connect,"UPDATE `patient` SET `patient_password`='$patient_password' WHERE patient_Id=$_SESSION[patient_id]");
return $query;
}

function patient_profile(){

    $qu = mysqli_query($this->connect, "SELECT * FROM `patient` WHERE  patient_Id=$_SESSION[patient_id]");
   return $qu;

}
function select_blog($department_name,$department_description){

    $query = mysqli_query($this->connect, "SELECT * FROM `news` WHERE news_name='$department_name' And new_description='$department_description'");
    return $query ;

}
function specific_blog($department_id){

    $query = mysqli_query($this->connect, "SELECT * FROM `news` WHERE `news_id`=$department_id");
    return $query;
}

function show_blogs(){
$query = mysqli_query($this->connect, "SELECT * FROM `news` ORDER BY `news_id` DESC ");
    return $query;
                                   
}
function delete_blogs($department_id){
    $query = mysqli_query($this->connect, "DELETE FROM `news` WHERE news_id=$department_id");
   return $query;
}
function edit_blog($department_name,$department_description,$sub_image,$department_id){

    $query = mysqli_query($this->connect, "UPDATE `news` SET `news_name`='$department_name',
    `new_description`='$department_description',`news_image`='$sub_image' WHERE news_id=$department_id");
   return $query;

}
function insert_contact($name,$email,$phone,$messege){

    $query = mysqli_query($this->connect, "INSERT INTO `contact`(`contact_name`, `contact_email`, `contact_phone`, `contact_messege`) VALUES 
    ('$name','$email','$phone','$messege')");
    return $query;

}
function insert_blog($department_name,$department_description,$sub_image){

    $query=mysqli_query($this->connect, "INSERT INTO `news`(`news_id`, `news_name`, `new_description`,`news_date`, `news_image`) VALUES ('','$department_name','$department_description ',now(),'$sub_image')");
return $query;

}
function blog_detail_id($department_id){
    $query = mysqli_query($this->connect, "SELECT * FROM `news` WHERE news_id=$department_id");
   return $query;
}

function specific_patient_id($patient_id){

    $query = mysqli_query($this->connect, "SELECT * FROM `patient` where patient_id='$patient_id'");
return $query;
}
function patient(){
    $qu = mysqli_query($this->connect,"SELECT * FROM `patient`");
return $qu;
}
function book_appointment($fname,$lname,$age,$day,$email,$phone,$id){

    $qu = mysqli_query($this->connect, "INSERT INTO `appointment`(`appointment_id`, `appointment_fname`, `appointment_lname`, `appointment_age`, `appointment_day`, `appointment_email`, `appointment_phone`, `pat_id`, `d_id`,`date_time`) VALUES ('','$fname','$lname','$age','$day','$email','$phone','$_SESSION[patient_id]','$id',now())");
           return $qu;


}
function sel_app($fname,$phone,$day,$id){
    $query = mysqli_query($this->connect, "SELECT * FROM `appointment` WHERE appointment_fname= '$fname' AND appointment_phone= '$phone' AND `appointment_day`='$day'  AND `d_id`='$id'");
              return $query;

}
function delete_patient($id){
    $qd = mysqli_query($this->connect, "DELETE FROM `patient` WHERE patient_Id='$id'");
return $qd;
}

function doctor_search($search){

    $qs = mysqli_query($this->connect, "SELECT * FROM `doctor` INNER JOIN doctor_speciality ON doctor_speciality=speciality_id WHERE  doctor_city LIKE '$search%'  OR doctor_city = '$search'  OR  doctor_city LIKE '%$search%'  OR  doctor_country LIKE '$search%' OR doctor_country = '$search' OR doctor_country LIKE '%$search%' OR speciality_name LIKE '$search%' OR speciality_name = '$search' OR doctor_gender LIKE '$search%'");
return $qs;
}
function order_detail($p){

    $qs = mysqli_query($this->connect, "SELECT * FROM orders as o INNER Join products as p  on o.product_id = p.product_id WHERE o.product_id =$p AND o.client_id = $_SESSION[login_id] ");
return $qs;
}
function all_order_detail(){

    $qs = mysqli_query($this->connect, "SELECT * FROM orders as o INNER Join products as p  on o.product_id = p.product_id WHERE  o.client_id = $_SESSION[login_id] ");
return $qs;
}
}
