<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resource/css/new_home.css">
    <link rel="stylesheet" href="resource/css/all.css">
    </head>

<body >
<div class="container" id="container">
        <div class="header">
            <div class="logo">
                <img src="resource/img/logo.png" alt="">
                <h1><small style="font-size: 14px; color:gray;font-weight:normal">   Solution for many problem</small></h1>
            </div>
            <div class="sign">
                
                <?php if(!isset($_SESSION['email'])){?>
                    <button onclick="window.location='views/register.php'">Sign Up <i class="fas fa-user-plus"></i></button>
                    <button onclick="window.location='controller/logingController.php?click1'">Sign In <i class="fa fa-sign-in-alt"></i></button>
                    <?php }?>
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
                    <div class="profile"><a href="views/profilepage.php"> <i class="fa fa-user-circle fa-lg"></a></i></div>
                <?php
                    echo '<div class="user"><h4>Welcome '.$_SESSION['first_name'].'</h4></div>'; 
                    if($_SESSION['level']=='administrator'){?> <button onclick="window.location='controller/adminPanelCon.php?admin'"><i class="fas fa-cogs"></i> Dash Board </button>&nbsp<?php }
                    ?>
                    <button onclick="window.location='controller/logoutController.php'">Sign out <i class="fa fa-sign-out-alt"></i></button>
                <?php } ?> 
                
            </div>
        </div>
        <div class="nav">
                <div class="burger">
                        <div>
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                        </div>
                    </div>
            <ul class="nav_bar">
                <li class="nav_item " onclick="window.location='#'"><i class=" fa fa-home"></i>Home</li>
                <li class="nav_item " onclick="window.location='views/boardings.php'"><i class="fa fa-bed"></i> Boardings</li>
                <li class="nav_item " onclick="window.location='views/foodposts.php'"><i class="fas fa-hamburger"></i> Order Foods</li>
                <li class="nav_item " onclick="window.location='views/about.php'"><i class="fa fa-address-card"></i> About us</li>
                <li class="nav_item " onclick="window.location='views/contact_us.php'"><i class="fa fa-address-book"></i> Contact Us</li>
            </ul>
        </div>
        <div class="slide-nav">
            <ul><?php if(isset($_SESSION['email'])){?> 
                    <li onclick="window.location='views/profilepage.php'">Profile</li>

                    <li>Chat</li>
                    <?php  if($_SESSION['level']=='food_supplier'){?>
                      <li onclick='window.location="views/orders.php"'>Orders </li>
                    <?php } ?>
                    <?php if($_SESSION['level']=='boardings_owner'){?>
                      <li onclick='window.location="views/ConBODealIshan.php"'>Confirm Deal </li>
                      <li onclick='window.location="views/TBOReqIshan.php"'>Request</li>
                   <?php } ?>
                   <?php if($_SESSION['level']=='boardings_owner' || $_SESSION['level']=='boarder'){?>
                    <li onclick='window.location="views/paymentFood_pending.php"'>My food Orders</li>
                    <?php } ?>
                    <li onclick='window.location="views/TBOReqIshan.php"'>Log out</li>
                <?php } else{?>
                    <h4>Plase sign in first to system.</h4>
                        <h3 class="nav-sign" onclick="window.location='views/user_loging.php'">Sign in </h3>
                        
                <?php } ?>
                </ul>
        </div>
        <div class="section1">
            <img src="resource/img/hostel-img3.jpg" alt="">
            <div class="section1-header">
               <div>
                 <h2>Welcome to Bodima</h2>
                 <h4>Accomadation management system</h4>
                 <h3></h3>
                 <!-- <h1>To Search, To Find, To delivery</h1> -->
                 <!-- <h1>To Find,To Search,To Delivery</h1> -->
               </div>
            </div>
        </div>
        <div class="section2">
            <!-- <img src="resource/img/hostel-img1.jpg" alt=""> -->
            <div class="section2-header">
               <div>
                 <h2>Bodima</h2>
                 <div class="component">
                     <div class="find">
                        <h1>To <b style="color: blue;">F</b>ind</h1>
                        <img src="resource/img/find.svg" alt="">
                        <p>Finding a bodim place hard for you. We are giving </p>
                     </div>
                     <div class="boarding">
                        <h1>To <b style="color: blue;">P</b>ost</h1>
                        <img src="resource/img/post.svg" alt="">
                     </div>
                     <div class="delivery">
                        
                        <h1>To <b style="color: blue;">D</b>elivery</h1>
                        <img src="resource/img/delivery.svg" alt="">
                     </div>
                 </div>
               </div>
            </div>
        </div>
        <div class="section3">
            <!-- <img src="resource/img/hostel-img1.jpg" alt=""> -->
            <div class="section3-header">
               <div>
                 <h2>Bodima</h2>
                 <h4>To find , To post , To delivery</h4>
               </div>
            </div>
        </div>
        <?php include '../bodima-app/views/footer.php' ?>
</div>
</body>
<script src="resource/js/jquery.js"></script>
<script src="resource/js/home1.js"></script>
<script src="resource/js/new_home.js"></script>

</html>