<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../resource/css/home.css">  -->
    <link rel="stylesheet" href="../resource/css/sidebar.css">
    <link rel="stylesheet" href="../resource/css/profilepage1.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/all.css">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
</head>

    <body>
    	
    	<div  class="header">
            <div class="logo">
                <h1><b style="color: rgb(13, 13, 189)">B</b>odima<small style="font-size: 14px; color:rgb(13, 13, 189);">   Solution for many problems</small></h1>
            </div>
            <div class="sign">
                <?php if(!isset($_SESSION['email'])){echo '<a href="../controller/logingController.php?click1">Sign In <i class="fa fa-sign-in-alt"></i></a>';}?>
                <?php if(isset($_SESSION['email'])){ 
                    ?>
                    <div class="notification"><i class="fa fa-bell"></i></div>
                    <div class="profile"><a href="../views/profilepage.php"> <i  class="fa fa-user-circle"></a></i></div>
                <?php
                    echo '<div class="user">Hi '.$_SESSION['first_name'].'</div>'; 
                    echo '<a href="../controller/logoutController.php">Sign out <i  class="fa fa-sign-out-alt"></i></a>';}
                ?> 
                
            </div>
        </div>
  </a>
</div>
</div>
</div>

<?php require "sidebar.php"?>


<div class="content_template">
  <div class="content_container">
    <div class="pro_inner">
        <div class="title">
          Jessica Wotson

        </div>
        <div class="content">
          <div class="x">
            <div class="t_head">User type :</div>
            <div class="t_def">Food Supplier</div>
          </div>

          <div class="x">
            <div class="t_head">First Name :</div>
            <div class="t_def">Jessica</div>
          </div>

          <div class="x">
            <div class="t_head">Last Name :</div>
            <div class="t_def">Wotson</div>
          </div>

          <div class="x">
            <div class="t_head">Address :</div>
            <div class="t_def">UCSC Building Complex, 35 Reid Ave, Colombo 00700</div>
          </div>

          <div class="x">
            <div class="t_head">Email :</div>
            <div class="t_def">jessi@gmail.com</div>
          </div>

          <div class="x">
            <div class="t_head">Contact Number :</div>
            <div class="t_def">0773322110</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



</body>
</html>