<?php 
 require_once ('../config/database.php');
 require_once ('../models/profile_model.php');
 require_once ('../models/reg_userIshan.php');

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
    <link rel="stylesheet" href="../resource/css/myboarders.css">
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
                    echo '<a href="../controller/logoutController.php">Sign out <i class="fa fa-sign-out"></i></a>';}
                ?> 
                
            </div>
        </div>
 
<?php require "sidebar.php"?>






  <div class="content_template">
    <div class="content_container">
        <h2>My Boarders</h2>
        <div class="boarder_table">
            <table>
                    <tr>
                        <th class="regno" style='width:10px;'>Reg Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>NIC</th>
                        <th>Address</th>
                        <th>PostNo</th>
                        <th>Remove</th>
                    </tr>
                    <?php  
                    //$level=$_SESSION['level'];
                    //$first_name=$_SESSION['first_name'];
                   // $last_name=$_SESSION['last_name'];
                   //  $email=$_SESSION['email'];
                    // $address=$_SESSION['address'];
                     $BOid=$_SESSION['BOid'];

                    $result=reg_userIshan::selectMyBorders($connection,$BOid);

                     
                       $i=0;
                     while ($user=mysqli_fetch_assoc($result)) {
                        $i++;
                          $first_name=$user['first_name'];
                          $last_name=$user['last_name'];
                          $nic=$user['nic'];
                         $house_num=$user['house_num'];
                           $lane=$user['lane'];
                            $city=$user['city'];
                             $B_post_id=$user['B_post_id'];
                          
                     



 ?>
            
                    <tr>
                        <td class="regno"><?php echo $i; ?><img src="../resource/Images/profile_img2.jpg"></td>
                        <td><?php echo $first_name; ?></td>
                        <td><?php echo $last_name; ?></td>
                        <td><?php echo $nic; ?></td>
                        <td><?php echo $house_num.", ".$lane.", ".$city; ?></td>
                        <td><?php echo $B_post_id; ?></td>
                        <td class="red">delete</td>
                    </tr>
                <?php } ?>

            </table>
        
        
        </div>
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