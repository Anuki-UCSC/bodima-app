<?php include('../config/database.php');?>
<?php include('../models/reg_userIshan.php');?>
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
    <link rel="stylesheet" href="../resource/css/mypayments.css">
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


<?php require "sidebar.php"?>


<div class="bg_profile">
  <div class="nav">
    <div class="nav_topic">
      
    </div>
  </div>
</div>

<div class="content_template">
   <div class="content_container" >
 
      <div class="new-order">
        <h5>Confirm Tempory Request List</h5>
      </div>
        <div class="cont">
          <div class="container">
    

<main role="main">

      <section >
        <div >
            <?php
         // print_r($_SESSION);
           $student_email=$_SESSION['email'];
       // echo   $BOid=$_SESSION['BOid'];
       // echo "<br>".$_SESSION['Bid'];

         

          
    
    //       $query="SELECT * FROM request WHERE isAccept=1 AND student_email='{$student_email}'";
           
       // $data=$connection->query($query);
         $data=reg_userIshan::temBRequest($student_email,$connection);
      


       if ($data) {
        $i=0;

        while ($user=mysqli_fetch_assoc($data)) {
          $i++;
          ?>
          <div class="item-wrap">
                       <h3>Accepted Request:<?php echo $i?></h3>
                    <div class="cart-item">
                          <img src="<?php echo $user['image']; ?>" style="width:140px;height:150px;">
                    <form action="../controller/ConDealBoarderIshan.php" method="post">

                      
                           <h4><b style="color: red">Congralulations!!</b> You Requested  <?php echo $user['city']; ?>         my boarding place.I liked to join you for new boarder.So I accepted your request please Confirm Request soon.</h4>

                        
                            <div class="btn1">
                                 <input type="hidden" name='B_post_id' value="<?php echo $user['B_post_id']; ?>">
                                <input type="hidden" name='student_email' value="<?php echo $user['student_email']; ?>">
                              <!--  <input type="hidden" name='address' value="<?php// echo $address; ?>">
                                <input type="hidden" name='email' value="<?php //echo $email; ?>">
                                <input type="hidden" name='first_name' value="<?php //echo $first_name; ?>">
                                <input type="hidden" name='last_name' value="<?php//echo $last_name; ?>"> -->
                                <button class="btn5" name="accept" type="submit">Accept</button>
                                <button class="btn2" name="remove" type="submit">cancel</button>
                            </div>
                        
                    </div>
                </div>
            </form>
                <?php
                    }
                }else{
                    echo "No Pending Requests.";
                }
                //echo $user['date'];
            ?>

        
 
                  
           






            
           
          
        </div>
          
      </section>

    </main>

</div>



        




        </div>
      </div>
    </div>
  </div>



</body>
</html>
<?php $connection->close(); ?>