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
    <link rel="stylesheet" href="../resource/css/myads.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
</head>

    <body>
    	
    	<div class="header">
            <div class="logo">
                <h1><b style="color: rgb(13, 13, 189)">B</b>odima<small style="font-size: 14px; color:rgb(13, 13, 189);">   Solution for many problem</small></h1>
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
 $FSid=$_SESSION['FSid'];


?>

  <div class="content_template">
    <div class="content_container">
        <h2>My Advertisements</h2>
        <div class="post_cont">

        <?php
        // echo $FSid;
         $result=profile_model::f_postListByPerson($FSid,$connection);

        while($row=mysqli_fetch_assoc($result)){
         
         echo '
            <div class="table-responsive">
                  <table class="table table bordered">
                    <tr>
                      <th class="img_th" rowspan=6>
                      <div class="inner_img">
                      <img src="'.$row["image"].'" class="profile_image" alt="" >
                      </div>
                      </th>
                      <th></th style="margin-left:-20px;"><td><h1>'.$row["ad_title"].'</h1></td>
                    </tr>
                    <tr>
                      <th></th><td><b><h3>'.$row["description"].'</h3></b></td>
                    </tr>
                      </th>
                      <th>No</th><td>'.$row["F_post_id"].'</td>
                    </tr>
                    <tr>
                      <th>Address</th><td>'.$row["address"].'</td>
                    </tr>
                    
                  </table>
            <input type="button" name="deletepost" value="Delete">
            </div>'
            
           ; } ?>
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