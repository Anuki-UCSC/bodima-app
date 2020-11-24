<?php 
 require_once ('../config/database.php');
 require_once ('../models/profile_model.php');

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../resource/css/home.css">  -->
    <link rel="stylesheet" href="../resource/css/sidebar.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/chat_boardingOwner.css">
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
 
<?php require "sidebar.php"?>




<?php
 $level=$_SESSION['level'];
 $first_name=$_SESSION['first_name'];
 $last_name=$_SESSION['last_name'];
 $email=$_SESSION['email'];
 $address=$_SESSION['address'];
 $BOid=$_SESSION['BOid'];


?>

  <div class="content_template">
    <div class="content_container">
        <h2>Chat</h2>
        <table class="chatbody_b">
            <tr>
                <td class="chatlist">
                    <div class="chat_search_div">
                        <div class="s_in">
                            <i class="fas fa-search"></i>
                            <input type="text" name="chat_search" value="Search . . .">
                        </div> 
                    </div>
                    <div class="l_body">    
                        <li>
                            <img src="../resource/Images/profile_img2.jpg" alt="boarding owner">
                            Wimala Perera<br /><span>hi</span>
                            <div class="n">
                                18 : 34
                                <div class="nn">4</div>
                            </div>
                        </li>
                            
                        <li>
                            <img src="../resource/Images/profile_img2.jpg" alt="boarding owner">
                            Diyana Fernando<br /><span>I paid rent</span>
                            <div class="n">
                                06 : 03
                                <div class="nn">3</div>
                            </div>
                        </li>
                        <li>
                            <img src="../resource/Images/profile_img2.jpg" alt="boarding owner">
                            Ramya Rajapaksha<br /><span>hi</span>
                            <div class="n">
                                01 : 39
                                <div class="nn">8</div>
                            </div>
                        </li>
                        <li>
                            <img src="../resource/Images/profile_img2.jpg" alt="boarding owner">
                            Thinuli	Gothatuwa<br /><span>i am thinuli</span>
                            <div class="n">
                                08 : 24
                            </div>
                        </li>
                        <li>
                            <img src="../resource/Images/profile_img2.jpg" alt="boarding owner">
                            Yamuna Rajakaruna<br /><span>:) thank you</span>
                            <div class="n">
                                12 : 07
                                <div class="nn">2</div>
                            </div>
                        </li>
                        
                        
                    </div>
                </td>
                <td class="chatwindow">
                    <div class="chat_head">
                        <img src="../resource/Images/profile_img2.jpg" alt="boarding owner">
                        <h3>Rohani Wickramanayaka</h3>
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
                    </div>

                </td>
            </tr>
        </table>
    </div>
  </div>



</body>


<script>
function discard() {
  alert("This will ignore the changes you made!");
}

function save_changes() {
  alert("Do you want to save changes of your profile?");
}
</script>
</html>