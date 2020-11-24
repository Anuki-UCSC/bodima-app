<?php   include ('../config/database.php');
      include('../models/reg_userIshan.php');
      session_start(); ?>
        

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="../resource/css/all.css">
    <link rel="stylesheet" href="../resource/css/paymentFood.css">
    <link rel="stylesheet" type="text/css" href="../resource/css/boarding_request_A.css">
    <title>Document</title>
</head>
<body>
<div class="header">
            <div class="logo">
                 <img src="../resource/img/logo.png" alt="">
                <h1><small style="font-size: 14px; color:black;">   Solution for many problems</small></h1>
            </div>
            <div class="sign">
                <?php if(!isset($_SESSION['email'])){echo '<a href="../controller/logingController.php?click1">Sign In <i class="fa fa-sign-in-alt"></i></a>';}?>
                <?php if(isset($_SESSION['email'])){ 
                    if($_SESSION['level']=='administrator'){echo '<a href="../controller/adminPanelCon.php?admin"> Dash Board &nbsp</a>'; }
                    ?>

                    <div class="notification">
                        <i class="fa fa-bell"></i>
                        <div class="notification-box" >
                            <ul>
                                <li><i class="fas fa-times"></i></li>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                                <a href="#"><li>You have notification</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="profile"><a href="profilepage.php"> <i  class="fa fa-user-circle"></a></i></div>
                <?php
                    echo '<div class="user">Hi '.$_SESSION['first_name'].'</div>'; 
                    echo '<a href="../controller/logoutController.php">Sign out <i class="fa fa-sign-out-alt"></i></a>';}
                ?> 
                
            </div>
        </div>
    <div class="container">
        <div class="content">
          <div class="payment-slide">
              <ul>
                  <li onclick="window.location='../index.php'">Home page</li>
                  <li onclick="window.location='pendingReqIshan.php'">Pending Requests</li>
                  <li onclick="window.location='acceptedReqIshan.php'">Accepted Requests</li>
                <li onclick="window.location='rentedPayIshan.php'">Rented (payment done)</li>
                  <li onclick="window.location='rentedPayNotIshan.php'">Rented (payment Not done)</li>
                  <li onclick="window.location='cancelReqIshan.php'">Canceled</li>
              </ul>
          </div>  

          <div class="pending">
        <div class="new-order">
        <h2 > Accepted Request</h2> 
                <!-- confirm deal for "rented payment done" customers -->
        </div>


          <?php 

          $student_email=$_SESSION['email'];
          $result=reg_userIshan::AcceptRequest($student_email,$connection);
          while ($user=mysqli_fetch_assoc($result)) {
            $request_id=$user['request_id'];
            $student_email=$user['student_email'];
            $B_post_id=$user['B_post_id'];
            $city=$user['city'];
             $image=$user['image'];

              $first_name=$user['first_name'];
          $last_name=$user['last_name'];
         
            
             
         
         

          
             
         


           ?>


           <div class="box">
                    <div class="resend wait" style="background-color: #74bcf5;">
                        <div class="right" ><i class="fas fa-play-circle" ></i></div>
                        <div class="letter"><h3>Your Request has Accepted - continue renting here <small><b id="countdown">15h 45m 36s</b> This request will cancel </small></h3></div>
                    </div>
                  <div class="details-box">
                        <div class="details">
                            <h2>Request Id :<span style="color:#0900b0;"><?php echo $request_id; ?></h2>
                            <img src="<?php echo $image; ?>" class="post_image" alt="" >
                            <h4>post Id :<?php echo $B_post_id; ?></h4>
                            <h4><?php echo $city; ?></h4>
                        </div>
                        <div class="button-pay">
                        <h2>Congratulations! You Can continue renting</h2>
                            <h4>Your request has been Accepted by post owner.<br/></h4>
                            <h4>Post owner : <span style="color:#0900b0;"><?php echo $first_name."  ".$last_name; ?></span></h2>
                            <br/><br/><hr>
                            <h4>If you want to rent this boarding, click 'Pay and Reserve'</h4><br/>
                            <button type="button" class="btn2 pay_and_reserve" onclick='if(confirm("Are you want to accept this Request ?")) window.location="../controller/requestIshan.php?requestCAccept_id=<?php echo $request_id; ?>"'> Pay and Reserve</button>


                            <button type="button" class="btn1 cancel"   onclick='if(confirm("Are you want to cancel this Request ?")) window.location="../controller/requestIshan.php?requestDelete_id=<?php echo $request_id; ?>"'> Cancel</button>
                        </div>
                  </div>
        </div>
        <?php 
        } ?>
     
</div>


       
<!--     
        <div class="more-details">
                   
        </div> -->
        </div>
    </div>
    <!-- <?php //include 'footer.php'?> -->
</body>
<script src="..resource/js/timing.js"></script>
</html>