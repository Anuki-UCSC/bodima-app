<?php 
 require_once ('../config/database.php');
 require_once ('../models/orderModel.php');
    session_start ();
?>

<?php
if(isset($_POST['submit']))
{
$errors=array();
   if(!isset($_POST['address']) || strlen(trim($_POST['address']))<1)
   {
      $error['address']="errorAddress";
   }
   if(!isset($_POST['phone']) || strlen(trim($_POST['phone']))<1)
   {
      $error['phone']="errorPhone";
   }
   if(empty($error)){
   //  print_r($_SESSION);
    if(isset($_SESSION['cart']))
    {
       $email=$_SESSION['email'];
       $F_post_id=$_POST['Pid'];
       $first_name=$_SESSION['first_name'];
       $last_name=$_SESSION['last_name'];
       $address=$_POST['address'];
       $products=$_SESSION['cart'];
       $order_id=time().mt_rand($email);
       $total=$_SESSION['total'];
       $_SESSION['order_id']=$order_id;  
       foreach($products as $product)
       {
        orderModel::food_request($F_post_id,$email,$address,$first_name,$last_name,$product['item_name'],$product['item_quantity'],$order_id,$total,$connection);
       }
      //  $_SESSION['isdisable']=1;
      header('Location:../views/paymentFood_pending.php');
   }
}else{
   header('Location:../views/cartItem.php?'.$error['address'].'&'.$error['phone'].'&Pid='.$_POST['Pid']);
}
}

if(isset($_GET['orderDelete_id'])){
   $order_id=$_GET['orderDelete_id'];
   $result=orderModel::requestOrderDelete($connection,$order_id);
   if($result){
      header('Location:../views/paymentFood_pending.php');
   }
   {
      echo "Mysqli query failed";
   }
}
if(isset($_GET['orderConfirm_id'])){
   $order_id=$_GET['orderConfirm_id'];
   $result=orderModel::requestOrderConfirm($connection,$order_id);
   if($result){
      header('Location:../views/paymentFood_history.php?success&order_id='.$order_id);
   }
   {
      echo "Mysqli query failed";
   }
}

if(isset($_GET['order_id'])){
   $order_id=$_GET['order_id'];
   $result=orderModel::paymentOrder($connection,$order_id);
   if($result){
      header('Location:../views/paymentFood_receving.php');
   }
   {
      echo "Mysqli query failed";
   }
}

?>