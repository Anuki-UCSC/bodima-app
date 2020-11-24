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
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/profilepage1.css">
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


<div class="bg_profile">
	<div class="nav">
		<div class="nav_topic">
			
		</div>
	</div>
</div>

<?php
 $level=$_SESSION['level'];
 $first_name=$_SESSION['first_name'];
 $last_name=$_SESSION['last_name'];
 $email=$_SESSION['email'];
 $address=$_SESSION['address'];
?>

<div class="content_template">
<div class="content_container">
  <h2>Edit Profile</h2>
  <div class="pro_inner">
        <div class="title">
              <div class="back_button">
                <a href="profilepage.php">
                <i class="far fa-arrow-alt-circle-left" style="font-size:48px; color:white;"></i></a>
              </div>
              <div class="title_name">
              <?php echo ''.$first_name.' '.$last_name?>
              </div>
        </div>
      <form action="../controller/editprofile_control.php" method="post"> 
        <div class="content">
          <div class="x">
            <div class="t_head">User type :</div>
            <div class="t_def_form"><?php echo $level ?></div>
          </div>


          <div class="x">
            <div class="t_head">First Name :</div>
            <div class="t_def_form">
              <input type="text" id="fname" name="first_name" value='<?php echo $first_name ?>'></div>
          </div>

          <div class="x">
            <div class="t_head">Last Name :</div>
            <div class="t_def_form">
               <input type="text" id="lname" name="last_name" value='<?php echo $last_name ?>'>
            </div>
          </div>

          <div class="x">
            <div class="t_head">Address :</div>
            <div class="t_def_form">
              <textarea id="subject" name="address" placeholder='<?php echo $address ?>' style="height:50px"><?php echo $address ?></textarea>
            </div>
          </div>

          <!-- <div class="x">
            <div class="t_head">Email :</div>
            <div class="t_def_form">
              <input type="text" id="email" name="email" value="">
            </div>
          </div> -->

          <div class="x">
            <div class="t_head">Contact Number :</div>
            <div class="t_def_form">
              <input type="text" id="contactno" name="contactno" value="0773322110">
            </div>
          </div> 
          <div class="editpro_btn">
            <input type="submit" name="editprofile_btn" value="Save Changes" onclick="save_changes()">
            <input type="reset" name="discard_btn" value="discard" onclick="discard()">
            
          </div>
        </div>
      </form> 
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