<?php
include ("../connection.php");
$obj = new data(); 
if(isset($_GET['id']))
{
   $id = $_GET['id'];
   $status = $_GET['status'];
   $a = $obj->select_order_id($id);
   $dt = mysqli_fetch_assoc($a);
   $qty = $dt['order_qty'];
   $pr_id =$dt['product_id'];
  $q= $obj-> order_status($id, $status);
  if($status == "Cancelled")
  {
     $b = $obj->spec_product($pr_id);
     $ro =mysqli_fetch_assoc($b);
     $old_qty = $ro['product_stock'];
     $c =$obj->up_product($old_qty,$qty,$pr_id);
     if($c== 1)
     {
      echo '<script>window.location.href="showorders.php"</script>';
     }
  }
  echo '<script>window.location.href="showorders.php"</script>';
}
?>
