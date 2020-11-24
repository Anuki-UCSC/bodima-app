<?php include('../config/database.php');?>
<?php include('../models/reg_userIshan.php');?>
<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My requests</title>
    <!-- <link rel="stylesheet" href="../resource/css/home.css">  -->
    <link rel="stylesheet" href="../resource/css/sidebar.css">
    <link rel="stylesheet" href="../resource/css/myrequests.css"> 
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/profilepage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
</head>

<body>
    	
    <div class="header">
            <div class="logo">
                <h1><b style="color: rgb(13, 13, 189)">B</b>odima<small style="font-size: 14px; color:rgb(13, 13, 189);">   Solution for many problems</small></h1>
            </div>
            <div class="sign">
                <?php if(!isset($_SESSION['email'])){echo '<a href="controller/logingController.php?click1">Sign In <i class="fa fa-sign-in"></i></a>';}?>
                <?php if(isset($_SESSION['email'])){ 
                    ?>
                    <div class="notification"><i class="fa fa-bell"></i></div>
                    <div class="profile"><a href="views/profile.php"> <i  class="fa fa-user-circle"></a></i></div>
                <?php
                    echo '<div class="user">Hi '.$_SESSION['first_name'].'</div>'; 
                    echo '<a href="controller/logoutController.php">Sign out <i class="fa fa-sign-out"></i></a>';}
                ?> 
                
            </div>
        </div>

<?php require 'sidebar.php'?> 

 

 <div class="content_template">
   <div class="content_container" >
      <div class="new-order">
        <h5>Accepted boarding Requests</h5>
      </div>
        
          
    
<!-- ******************************************************************** -->
    <form action="../controller/orderAcptCon.php" method="post">
            <div class="pro_inner">
            <div class="item-wrap">
              <div class="status">
                  <h4>Accepted</h4>
              </div>
              <div class="Boardingplace">
                  <h3>Boarding Place :     8/48,  Maharagama </h3>
              </div>
              <div class="cont">
                     <div class="house_img">
                      <!-- <img runat = 'server' src = '$boarding_post->image' /> -->
                      <img src = '../resource/Images/h1.jpg' />
                    </div>
                    <div class="holder">
                      <div class="innnerhold">
                        <p>owner : Mr. Rohini Wickramanayaka <p>
                        <p>date : 2020/10/3 <p>
                        </div>
                        <div class="but_pl">
                          <button class="btn_1" name="accept" type="submit">Confirm  Renting<!-- <i class="fas fa-check"  style="font-size:60px;color:white;"></i> --></button>
                          <button class="btn_2" name="remove" type="submit">Cancel</button>

                        </div>
                    </div> 
            </div>


                        
            
            </div>
            </div>
     </form>  

<!-- ******************************************************************** -->
          
       
    </div>
</div> 



</a>
</div>
</div>
</div>
</body>
</html>
        



<?php $connection->close(); ?>