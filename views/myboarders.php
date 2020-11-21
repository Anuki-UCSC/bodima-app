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
    <link rel="stylesheet" href="../resource/css/myboarders.css">
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
 $BOid=$_SESSION['BOid'];


?>

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
            
                    <tr>
                        <td class="regno">1<img src="../resource/Images/profile_img2.jpg"></td>
                        <td>Wimala</td>
                        <td>Perera</td>
                        <td>954321112v</td>
                        <td>44, mal mawatha, mattegoda</td>
                        <td>1</td>
                        <td class="red">delete</td>
                    </tr>

                    <tr>
                        <td class="regno">2<img src="../resource/Images/profile_img2.jpg"></td>
                        <td>Diyana</td>
                        <td>Fernando</td>
                        <td>922221006v</td>
                        <td>16, Araliya uyana, Kottawa</td>
                        <td>3</td>
                        <td class="red">delete</td>
                    </tr>

                    <tr>
                        <td class="regno">3<img src="../resource/Images/profile_img2.jpg"></td>
                        <td>Ramya</td>
                        <td>Rajapaksha</td>
                        <td>966661788v</td>
                        <td>Darmapala mawatha,Thummulla</td>
                        <td>2</td>
                        <td class="red">delete</td>
                    </tr>

                    <tr>
                        <td class="regno">4<img src="../resource/Images/profile_img2.jpg"></td>
                        <td>Thinuli</td>
                        <td>Gothatuwa</td>
                        <td>966611444v</td>
                        <td>Darmapala mawatha,Panniptiya</td>
                        <td>3</td>
                        <td class="red">delete</td>
                    </tr>
                    <tr>
                        <td class="regno">5<img src="../resource/Images/profile_img2.jpg"></td>
                        <td>Yamuna</td>
                        <td>Rajakaruna</td>
                        <td>966511965v</td>
                        <td>school road, Panniptiya</td>
                        <td>2</td>
                        <td class="red">delete</td>
                    </tr>
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