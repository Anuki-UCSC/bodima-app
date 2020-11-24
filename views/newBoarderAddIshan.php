<?php   require_once ('../config/database.php');?>

<?php include('../models/reg_userIshan.php');?>
<?php   
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
                  <li onclick="window.location='myBoardingReqIshan.php'">New Requests</li>
                  <li onclick="window.location='newBoarderAddIshan.php'">New Boarder Added</li>
                  <li onclick="window.location='addAsBoarderIshanBO.php'">Add as a new Boarder</li>
                 
              </ul>
          </div> 



          <div class="pending"> 
    <div class="new-order">
    <h2 >New Boarder Added</h2> 
            <!-- confirm deal for "rented payment done" customers -->
    </div>



          <?php 

           $email=$_SESSION['email'];
          $BOid=$_SESSION['BOid'];
          $result=reg_userIshan::selectMyBordersBO($connection,$BOid);
          while ($user=mysqli_fetch_assoc($result)) {
          // echo  $request_id=$user['request_id'];
           // $student_email=$user['student_email'];
            $B_post_id=$user['B_post_id'];
           

             $first_name=$user['first_name'];
         // $last_name=$user['last_name'];
        //  $date=$user['date'];
         // $message=$user['message'];
$payment_date=$user['payment_date'];
         
          $keymoneyAmount=$user['keymoneyAmount'];
             
         $rend_id=$user['rent_id'];
         $gender=$user['gender'];
         $rend_id=$user['rent_id'];
         $nic=$user['NIC'];
         $institute=$user['institute'];
         $telephone=$user['telephone'];

          
             
         


           ?>
            <div class="box">
                    <div class="resend wait" style="background-color: rgb(29, 236, 191);">
                        <div class="right" ><i class="fas fa-user-check fa-2x"></i></div>
                        <div class="letter"><h3 style="margin-top:35px;">Congratulations! You have a new boarder.<small> post number: <?php echo $B_post_id; ?><br/>request no: </small></h3></div>
                    </div>
                  <div class="details-box">
                        <div class="details">
                            <h2>Payment :<span style="color: rgb(6, 165, 131);">successful</h2><br/><br/>
                            <!-- <img src="../resource/Images/uploaded_boarding/2.jpg" class="post_image" alt="" > -->
                            <h2>amount : <span style="color: rgb(6, 165, 131);"><?php echo $keymoneyAmount; ?></span></h2><br/>
                            <h4>recieved at: <span style="color: rgb(6, 165, 131);"><?php echo $payment_date; ?></span></h4>
                            <h4>payment id:<?php echo $rend_id; ?></h4>
                        </div>
                        <div class="button-pay">
                        <h2>New person has done Advance payment! </h2>
                            <h4>Name: <span style="color: rgb(6, 165, 131);"><?php echo $first_name; ?></span><br/></h4>
                            <h4>Gender: <span style="color: rgb(6, 165, 131);"><?php echo $gender; ?></span><br/></h4>
                            <h4>NIC: <span style="color: rgb(6, 165, 131);"><?php echo $nic; ?></span><br/></h4>
                            <h4>telephone no: <span style="color: rgb(6, 165, 131);"><?php echo $telephone; ?></span><br/></h4>
                            <h4>University/working at: <span style="color: rgb(6, 165, 131);"><?php echo $institute; ?></span><br/></h4>
                            
                            <br/><hr>
                            <h4><span style="color: rgb(6, 165, 131); text-decoration:underline;"><a href="myboarders.php">click here</a></span> to view My boarders</h4><br/>
                        </div>
                  </div>
        </div>


         
               
           <?php 
            } ?>

     </div> 



       
    
        <!-- <div class="more-details">
                   
        </div> -->
        </div>
    </div>
    <!-- <?php include 'footer.php'?> -->
</body>
<script src="..resource/js/timing.js"></script>
</html>