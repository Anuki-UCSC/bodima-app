<?php 
require_once ('../config/database.php');
        require_once ('../models/reg_userIshan.php');
     
        session_start(); 

 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../resource/css/registerIshan.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
    <title>Registration Form</title>
    
</head>
<body class="body2">
    <div class="container">
    <div class="para">
            <h1><b>P</b>ay <b>K</b>ey Money</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga doloremque sunt nam ipsam nihil quo quidem asperiores quisquam pariatur expedita ducimus, voluptatem nisi, dignissimos recusandae. </p>
    </div>
    <div class="register">
    
       <?php
       if(isset($_GET['param']))
       {
           $errors=$_GET['param'];
           foreach($errors as $error)
           {
               echo '<p class="error"><b>'.$error.'</b></p>';
           }
       }
     
     ?>

     <?php 
     $st_email=$_SESSION['email'];
     $result=reg_userIshan::selectStToBoarder($st_email,$connection);
     $user=mysqli_fetch_assoc($result);
      $first_name=$user['first_name'];
            $last_name=$user['last_name'];
            $nic=$user['nic'];
            $keymoney=$user['keymoney'];
            $BOid=$user['BOid'];
             $B_post_id=$user['B_post_id'];
            $house_num=$user['house_num'];
            $lane=$user['lane'];
            $city=$user['city'];


      //  $result1=reg_userIshan::getBONamepayhere($st_email,$connection); 
      //  $user1=mysqli_fetch_assoc($result1);   
      // echo  $BOfirst_name=$user1['first_name'];
      //  echo $BOlast_name=$user1['last_name']; 

      ?>
           <form action="https://sandbox.payhere.lk/pay/checkout" method="post">
            <!-- <p>Address</p>
            <input type="text" name="address" placeholder="Enter Address Name">

            <p>Location link</p>
            <input type="text" name="link" placeholder="Enter Location Name">
               
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password"> -->

            <input type="hidden" name="merchant_id" value="1215562">    <!-- Replace your Merchant ID -->
            <input type="hidden" name="return_url" value='http://localhost/bodima-app/controller/payhereOnlineSuccessIshan.php?success'>
            <input type="hidden" name="cancel_url" value="http://localhost/bodima-app/controller/payhereOnlineCancelIshanphp">
            <input type="hidden" name="notify_url" value="http://localhost/bodima-app/config/paycon.php"> 


            <br><p>Boarding Details</p>
           
            <input type="hidden" name="order_id" value="<?php echo $B_post_id;?>">
            <p>Boarding address:</p>
            <input type="text" name="baddress" value="<?php echo $house_num.", ". $lane.", ".$city;?>">
            <p>Boarding Owner Name :</p>
            <input type="text" name="items" value="<?php echo $city." Boarding KeyMoney";?>"><br>
            <input type="hidden" name="currency" value="LKR">
            <p>KeyMoney Price(LKR):</p>
            <input type="text" name="amount" value="<?php echo $keymoney;?>">  
<br><br>
            <p>My Details</p>
            <p>First Name:</p>
            <input type="text" name="first_name" value="<?php echo $first_name;?>">
            <p>Last Name:</p>
            <input type="text" name="last_name" value="<?php echo $last_name;?>"><br>
            <p>Email:</p>
            <input type="text" name="email" value="<?php echo $st_email;?>">
         
            <input type="hidden" name="address" value="No.1, Galle Road">
            <input type="hidden" name="city" value="Colombo">
            <input type="hidden" name="country" value="Sri Lanka"><br><br> 
            <input type="submit" value="Buy Now" name="value"> 






                    
           
           
           
           </form>
    </div>
    </div>
   <!--  <script src="../resource/js/main.js"></script> -->
</body>
</html>





