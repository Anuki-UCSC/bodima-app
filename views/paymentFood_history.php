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
                <h3>Order history</h3>
                <?php 
                $email=$_SESSION['email'];
                $ids_set=reg_user::getOrderById($connection,$email,4);
                $order_pending=reg_user::getOrderAll($connection,$email,4);
                // print_r($order_pending);
                // print_r($ids_set);
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
                <div class="box small">
                  <div class="details-box">
                    <div class="details">
                            <h2>Order Id : <span style="color:sienna;"><?php echo $id; ?></span> </h2>
                           
                            <h4 class="order_item"><i class="fas fa-caret-right"></i> Ordered Item :</h4>
                            <?php 
                                  foreach($data_rows as $data_row)
                                  {
                                      if($data_row['order_id']==$id)
                                      {
                                          $total=$data_row['total'];
                                          $time=$data_row['time'];
                                          $deliveredTime=$data_row['deliveredTime'];
                                          $restaurant=$data_row['restaurant'];
                                          $method=$data_row['method'];
                                          echo '<div class="product_item"><h5 class="item">'.$i++.'.'.$data_row['product_name'].'</h5>';
                                          echo '<h5 class="quantity">Quantity :'.$data_row['quantity'].'</h5></div>';
                                      }
                                          
                                  }
                                  $i=1;
                            ?>
                            <h4 class="order_item"><i class="fas fa-caret-right"></i> Payed amount :<span style="color: red;"> RS <?php echo $total; ?></span></h4>
                        </div>
                        <div class="button-pay">
                            <h3>Order Details</h3>
                            <h4 class="order_item"><i class="fas fa-caret-right"></i> Ordered time : <span style="color: sienna;"><?php echo $time ?></span> </h4>
                            <h4 class="order_item"><i class="fas fa-caret-right"></i> Delivered time : <span style="color: sienna;"><?php echo $deliveredTime ?></span> </h4>
                            <h4 class="order_item"><i class="fas fa-caret-right"></i> Payment method : <span style="color: sienna;"><?php echo $method ?></span> </h4>
                        <h4 class="order_item"><i class="fas fa-caret-right"></i> Resturent  : <span style="color: sienna;"><?php echo $restaurant ?></span> </h4>
                        </div>
                  </div>
                    
                </div>
                <?php
            }
                ?>
               
            </div>
        </div>
        </div>
    </div>
    <?php if(isset($_GET['success']) && isset($_GET['order_id'])){ ?>
    <div class="rating">
    <form class="form-rate" action="" method="post">
        <h2>Rate for order !</h2>
        <div class="rate">
            <input type="radio" name="rate" id="star1"><label for="star1"></label>
            <input type="radio" name="rate" id="star2"><label for="star2"></label>
            <input type="radio" name="rate" id="star3"><label for="star3"></label>
            <input type="radio" name="rate" id="star4"><label for="star4"></label>
            <input type="radio" name="rate" id="star5"><label for="star5"></label>
        </div>
        <h3>Unrate</h3>
            <input type="text" placeholder="Title">
            <textarea name="" id="" cols="5" rows="5" placeholder="Add commet"></textarea>
            <div>
                <button class="btn-rate" type="submit" >Submit</button>
                <button class="btn-rate cancel-rate" type="button" >Cancel</button>
            </div>
        </form>
    </div>
    <?php } ?>
    <!-- <?php include 'footer.php'?> -->
</body>
<script src="../resource/js/order.js"></script>
</html>