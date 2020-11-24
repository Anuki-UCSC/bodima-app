<?php   include ('../config/database.php');
       include('../models/reg_userIshan.php');
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
            <h2 >Rented Pay done</h2> 
                    <!-- confirm deal for "rented payment done" customers -->
            </div>
<?php 
           $student_email=$_SESSION['email'];
            $result=reg_userIshan::selectRPayD($connection,$student_email);
            while ($user=mysqli_fetch_assoc($result)) {
                $request_id=$user['request_id'];
                $image=$user['image'];
                $payment_date=$user['payment_date'];
                $B_post_id=$user['B_post_id'];
                $city=$user['city'];
                $house_num=$user['house_num'];
                $lane=$user['lane'];
                $first_name=$user['first_name'];
                $last_name=$user['last_name'];

                $getBid=reg_userIshan::selectBorderid($connection,$student_email);
              
           
 ?>


           


           <div class="box">
                    <div class="resend wait" style="background-color:  rgb(141, 243, 141);">
                        <div class="right" ><i class="fas fa-play-circle" ></i></div>
                        <div class="letter"><h3>Congratulations! You are a Boarder now! <small> Payment Done  :  &nbsp;&nbsp;&nbsp;<b><?php echo $payment_date; ?>  </b> </small></h3></div>
                    </div>
                  <div class="details-box">
                        <div class="details">
                            <h2>Request Id :<span style="color:green;"><?php echo $request_id; ?></h2>
                            <img src="<?php echo $image; ?>" class="post_image" alt="" >
                            <h4>post Id :<?php echo $B_post_id; ?></h4>
                            <h4><?php echo $city; ?></h4>
                        </div>
                        <div class="button-pay">
                        <h2>Payment Done. Resevation is Successful! </h2>
                            <h4>You successfully rented this boarding place.<br/><br/></h4>
                            <h4>Address : <span style="color:green;"><?php echo $house_num.", ".$lane.", ".$city; ?></span></h4>
                            <h4>Owner : <span style="color:green;"><?php echo $first_name."  ".$last_name; ?></span></h4>
                             <h4><span style="color:green;">Now,You can goto new Boarder Home Page:  <a  href="../controller/newBoarderIshanPayOn.php?click&Bid=<?php echo $getBid; ?>" style="color:red">Click here</a></span></h4>
                        </div>
                  </div>
        </div>
        <?php 
         } ?>
       
    
                   
        </div>
        </div>
    </div>
    <!-- <?php include 'footer.php'?> -->
</body>
<script src="..resource/js/timing.js"></script>
</html>