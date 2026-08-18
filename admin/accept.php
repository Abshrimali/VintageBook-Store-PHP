<?php
include "../connection.php";
session_start();
if($_SESSION['admin_username']=="")
{
    echo '<script>window.location.href="login.php"</script>';
}
if(isset($_GET['id']))
{
    $doctor_id = $_GET['id'];
    $object=new data();
     $query=$object->registration_request($doctor_id);
     if($query>0){

echo '<script>window.location.href="doctors.php"</script>';

     }
}
?>