<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="../resource/css/all.css">
    <link rel="stylesheet" href="../resource/css/about_us.css">
  
    <title>Document</title>
</head>
<body>
<div class="back-img">
   <div class="back-image"> <img src="../resource/img/about-us1.jpg" alt=""></div>
<?php include 'nav.php' ?>

<div class="containe">
    <div class="nav-contact">
        <h1>Requests</h1>
        <ul class="nav-contact-item">
            <li><a href="pendingReqIshan.php">Pending Requests</a></li>
            <li><a href="ishan.php">Ishan Resmika</a></li>
            <li><a href="nimasha.php">Nimasha Supunpaba</a></li>
            <li><a href="amal.php">Amal Lakshan</a></li>
        </ul>
    </div> 
    <div class="details">
        <h1>Meet group-12 Project-Bodima </h1>
        <p> Hi, We are undergradulates of the University Of Colombo School of Computing. This platform is a result of our 2nd year group project. We analyze the problems faced by university students. We identified two major issues facing university students by that analysis. those main problems were:
         <br/> dificulties of normal process of finding accommodation to stay. Another is to provide food. We created this platform to help them as well as facilitate them. </p>
         <div class="profile-pic">
             <img src="../resource/img/anuki.jpg" alt="">
             <img src="../resource/img/ishan.jpg" alt="">
             <img src="../resource/img/nimasha.jpg" alt="">
             <img src="../resource/img/pp.jpg" alt="">
             
         </div>
    </div>
    <div class="pic">
        <!-- <div class="picture">
            <img src="../resource/img/about.jpg" alt="">
        </div> -->
      
    </div>
</div>
<?php include 'footer.php' ?>
</div>
</body>
<script src="../resource/js/home1.js"></script>
<script src="../resource/js/jquery.js"></script>
</html>