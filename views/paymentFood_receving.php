<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php');
        session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="../resource/css/all.css">
    <link rel="stylesheet" href="../resource/css/paymentFood.css">
    <title>Document</title>
</head>
<body>
<div class="header">
            <div class="logo">
                 <img src="../resource/img/logo.png" alt="">
                <h1><small style="font-size: 14px; color:white;">   Solution for many problems</small></h1>
            </div>
            <div class="sign">
                <?php if(isset($_SESSION['email'])){ 
                    ?>

                    <div class="notification">
                        <i class="fa fa-bell fa-lg"></i>
                        <div class="notification-box" >
                            <ul>
                                <li><i class="fas fa-times fa-2x"></i></li>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="profile"><a href="profilepage.php"> <i  class="fa fa-user-circle fa-lg"></a></i></div>
                <?php
                    echo '<div class="user"><h4>Welcome '.$_SESSION['first_name'].'</h4></div>'; ?>
                    <button onclick="window.location='../controller/logoutController.php'">Sign out <i class="fa fa-sign-out-alt"></i></button>
                <?php } ?>
                
            </div>
        </div>
    <div class="container">
        <div class="content">
          <div class="payment-slide">
          <ul>
                   <li  onclick="window.location='../index.php'"><i class="fas fa-external-link-alt"></i> Home page</li>
                  <li onclick="window.location='paymentFood_pending.php'"><i  class="fas fa-hourglass-half"></i> Pending Orders</li>
                  <li onclick="window.location='paymentFood_accept.php'"><i  class="fas fa-clipboard-check"></i> Accepted Orders</li>
                  <li onclick="window.location='paymentFood_receving.php'"><i  class="fas fa-truck"></i> Receiving Order</li>
                  <li onclick="window.location='paymentFood_history.php'"><i class="fas fa-history"></i> Order History</li>
                  <li onclick="window.location='foodposts.php'"><i  class="fas fa-plus"></i> New Order</li>
              </ul>
          </div>          
       
        <div class="pending">
            <div class="title">
                <h3>Receiving Order</h3>
                <?php 
                $email=$_SESSION['email'];
                $ids_set=reg_user::getOrderById($connection,$email,3);
                $order_pending=reg_user::getOrderAll($connection,$email,3);
                $ids=array();
                while($record=mysqli_fetch_assoc($ids_set))
                {
                    $ids[]=$record['order_id'];
                }
                $data_rows=array();
                $i=0;
                while($record=mysqli_fetch_assoc($order_pending))
                {
                    $data_rows[$i]=$record;
                    $i++;
                }
                $total='';
                foreach($ids as $id){

                ?>
                <div class="box">
                    <div class="resend receiving">
                        <div class="right"><i class="fas fa-motorcycle fa-2x"></i></div>
                        <div class="letter"><h4>Your order is delivering <span class="dot dot1">.</span> <span class="dot dot2">.</span> <span class="dot dot3">.</span></h4></div>
                    </div>
                  <div class="details-box">
                    <div class="details">
                            <h2>Order Id :<span style="color:sienna;"><?php echo $id; ?></h2>
                            <h4 class="order_item"><i class="fas fa-caret-right"></i> Order Item :</h4>
                            <?php
                                 foreach($data_rows as $data_row)
                                 {
                                     if($data_row['order_id']==$id)
                                     {
                                         $total=$data_row['total'];
                                         $time=$data_row['time'];
                                         $restaurant=$data_row['restaurant'];
                                         echo '<div class="product_item"><h5 class="item">'.$i++.'.'.$data_row['product_name'].'</h5>';
                                         echo '<h5 class="quantity">Quantity :'.$data_row['quantity'].'</h5></div>';
                                     }
                                         
                                 }
                                 $i=1;
                            ?>
                            <h4 class="order_item"><i class="fas fa-caret-right"></i> Payed amount :<span style="color: red;"> RS <?php echo $total; ?></span></h4>
                        </div>
                        <div class="button-pay">
                        <h4 class="order_item"><i class="fas fa-caret-right"></i> Ordered time : <span style="color: sienna;"><?php echo $time ?></span> </h4>
                        <h4 class="order_item"><i class="fas fa-caret-right"></i> Resturent  : <span style="color: sienna;"><?php echo $restaurant ?></span> </h4>
                            <h4 class="order_item"  style="border-top: 2px solid rgb(176, 175, 177);font-weight:lighter"><i class="fas fa-check-square"></i> If your  order is received. Please Confirm </h4>
                            <button onclick='if(confirm("Confirm that you get the order ?")) window.location="../controller/orderCon.php?orderConfirm_id=<?php echo $id; ?>"'  type="button" class="btn1 "> Confirm </button>
                        </div>
                  </div>
                    
                </div>
               
                <?php
            }
                ?>
               
            </div>
        </div>
        <!-- <div class="more-details">
                    <div class="more">
                        <h2>Order Details</h2>
                        <h3>Order Id : <span style="color: sienna;">1245685625</span></h3>
                        <h4>Payed amout :123.15</h4>
                        <h4>Order Date :2020 / 04 /21</h4>
                        <h4>Order item :</h4>
                        <ul>
                            <li>1. rice</li>
                            <li>2. kotthu</li>
                            <li>3. fyed rice</li>
                        </ul>
                    </div>
        </div> -->
        </div>
    </div>
    <!-- <?php include 'footer.php'?> -->
</body>
</html>