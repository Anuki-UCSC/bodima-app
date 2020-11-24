<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Boarding Owner</title>
    <!-- <link rel="stylesheet" href="../resource/css/home.css">  -->
    <link rel="stylesheet" href="../resource/css/sidebar.css">
    <link rel="stylesheet" href="../resource/css/chat_boarder.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
</head>

    <body>
    	
    	<div  class="header">
            <div class="logo">
                <h1><b style="color: rgb(13, 13, 189)">B</b>odima<small style="font-size: 14px; color:rgb(13, 13, 189);">   Solution for many problems</small></h1>
            </div>
            <div class="sign">
                <?php if(!isset($_SESSION['email'])){echo '<a href="../controller/logingController.php?click1">Sign In <i class="fa fa-sign-in"></i></a>';}?>
                <?php if(isset($_SESSION['email'])){ 
                    ?>
                    <div class="notification"><i class="fa fa-bell"></i></div>
                    <div class="profile"><a href="../views/profilepage.php"> <i  class="fa fa-user-circle"></a></i></div>
                <?php
                    echo '<div class="user">Hi '.$_SESSION['first_name'].'</div>'; 
                    echo '<a href="../controller/logoutController.php">Sign out <i  class="fa fa-sign-out"></i></a>';}
                ?> 
                
            </div>
        </div>



<?php require "sidebar.php"?>


<div class="content_template">
    <div class="content_container">
        <!-- <div class="chat_window"> -->
            <div class="chat_head">
                    <img src="../resource/Images/profile_img2.jpg" alt="boarding owner">
                    <h2>Rohani Wickramanayaka</h2>
                    <h4>Boarding Owner</h4>
                    <i class="fas fa-comment-alt"></i>
                    <i class="fas fa-phone-alt"></i>
                    <i class="fas fa-info-circle"></i>
                
            </div>
            <div class="chat_body">
                <div class="chat_mid">

                    <!-- *****************incoming msg************************** -->
                    <div class="incoming_div">
                        <img src="../resource/Images/profile_img2.jpg" alt="boarding owner">
                        <h4>First incoming massage is this</h4>
                        <span>16:38 | 02 Oct</span>
                    </div>
                    <!-- ****************outgoing msg*************************** -->
                    <div class="outgoing_div">
                        <img src="../resource/Images/profile_img2.jpg" alt="boarding owner">
                        <h4>First incoming massage is this</h4>
                        <span>18:04 | 04 Oct</span>
                    </div>

                    <!-- ******************************************************* -->
                </div>
            </div>
            <div class="chat_footer">
                <input type="text" name="out_msg" value="Type here....">
                <i class="fas fa-paper-plane"></i>
            </div>

        <!-- </div> -->
    </div>
</div>


</body>
</html>