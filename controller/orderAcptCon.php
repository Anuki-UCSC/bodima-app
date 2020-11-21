<?php 
 require_once ('../config/database.php');
 require_once ('../models/orderModel.php');
 require_once('../config/acceptReq.php');
    session_start ();
?>

<?php
if(isset($_GET['click']))
{
  header('Location:../views/orders.php');
}


if(isset($_POST['accept']))
{
   
   $order_id=$_POST['order_id'];
   $address=$_POST['address'];
   $email=$_POST['email'];
   $total=$_POST['total'];
   $first_name=$_POST['first_name'];
   $last_name=$_POST['last_name'];
   $result=orderModel::accept($order_id,$connection);
   // sentAccept($email,$first_name,$address,$total);
   header('Location:../views/orders.php');
}
?>