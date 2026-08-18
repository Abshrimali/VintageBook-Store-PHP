<?php
session_start();


    $p_id = $_GET['id'];
  
if(isset($_SESSION['cart']))
{
    $old_qty = $_SESSION['cart'][$p_id];
    $_SESSION['cart'][$p_id]= $old_qty + 1;    
   
}
else
{
    $_SESSION['cart'][$p_id] = 1;
   
}
echo '<script>window.location.href="cart.php"</script>';
?>