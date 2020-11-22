<?php include('../config/database.php');?>
<?php include('../models/reg_userIshan.php');?>


 <?php session_start(); 
//print_r($_SESSION);?>

 <?php if (!isset($_SESSION['first_name'])) {
    header('Location: ../index.php');
} 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Boarding Owner Page</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="../resource/css/main.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="../resource/css/nav1.css"> -->
	<link rel="stylesheet" type="text/css" href="../resource/css/nav.css">
   <link rel="stylesheet" href="../resource/css/requestlistIshan.css">
   <link rel="stylesheet" type="text/css" href="../resource/css/boarding_request_A.css"> 
  
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="../resource/css/all.css">
    </head>
<body>
<?php include 'nav.php' ?>
    <div class="new-order">
        <h5 >student - Pending</h5>
    </div>

        <div class="box">
                    <div class="resend wait" >
                        <div class="right"><i class="far fa-clock fa-2x"></i></div>
                        <div class="letter"><h3>Your Request is Pending <span class="dot dot1">.</span> <span class="dot dot2">.</span> <span class="dot dot3">.</span> <small><b id="countdown">15h 45m 36s</b> This request will cancel </small></h3></div>
                    </div>
                  <div class="details-box">
                        <div class="details">
                            <h2>Request Id :<span style="color:sienna;">00016</h2>
                            <img src="../resource/Images/uploaded_boarding/2.jpg" class="post_image" alt="" >
                            <h4>post Id :0040</h4>
                            <h4>Nugegoda</h4>
                        </div>
                        <div class="button-pay">
                            <h2>Your request has been sent succesfully<br/></h2>
                            <h4>Post owner : <span style="color:sienna;">Rohini Wickramarachchi</span></h2>
                            <br/><br/><hr>
                            <h4>If you want cancel request. click the cancel request</h4>
                            <button type="button" class="btn1 cancel"> Cancel Request</button>
                        </div>
                  </div>
        </div>


<div class="new-order">
    <h5 >student - Accepted</h5>
</div>

        <div class="box">
                    <div class="resend wait" style="background-color: #74bcf5;">
                        <div class="right" ><i class="fas fa-play-circle" ></i></div>
                        <div class="letter"><h3>Your Request has Accepted - continue renting here <small><b id="countdown">15h 45m 36s</b> This request will cancel </small></h3></div>
                    </div>
                  <div class="details-box">
                        <div class="details">
                            <h2>Request Id :<span style="color:#0900b0;">00016</h2>
                            <img src="../resource/Images/uploaded_boarding/2.jpg" class="post_image" alt="" >
                            <h4>post Id :0040</h4>
                            <h4>Nugegoda</h4>
                        </div>
                        <div class="button-pay">
                        <h2>Congratulations! You Can continue renting</h2>
                            <h4>Your request has been Accepted by post owner.<br/></h4>
                            <h4>Post owner : <span style="color:#0900b0;">Rohini Wickramarachchi</span></h2>
                            <br/><br/><hr>
                            <h4>If you want to rent this boarding, click 'Pay and Reserve'</h4><br/>
                            <button type="button" class="btn2 pay_and_reserve" > Pay and Reserve</button>
                            <button type="button" class="btn1 cancel"> Cancel</button>
                        </div>
                  </div>
        </div>

        <div class="new-order">
    <h5 >student - Rented (payment done)</h5>
</div>

        <div class="box">
                    <div class="resend wait" style="background-color:  rgb(141, 243, 141);">
                        <div class="right" ><i class="fas fa-play-circle" ></i></div>
                        <div class="letter"><h3>Congratulations! You are a Boarder now! <small> Payment Done  :  &nbsp;&nbsp;&nbsp;<b>2020/11/23  &nbsp;&nbsp;  14:04:56</b> </small></h3></div>
                    </div>
                  <div class="details-box">
                        <div class="details">
                            <h2>Request Id :<span style="color:green;">00016</h2>
                            <img src="../resource/Images/uploaded_boarding/2.jpg" class="post_image" alt="" >
                            <h4>post Id :0040</h4>
                            <h4>Nugegoda</h4>
                        </div>
                        <div class="button-pay">
                        <h2>Payment Done. Resevation is Successful! </h2>
                            <h4>You successfully rented this boarding place.<br/><br/></h4>
                            <h4>Address : <span style="color:green;">44/A, Kekatiyawaththa Rd., Malapalla</span></h2>
                            <h4>Owner : <span style="color:green;">Rohini Wickramarachchi</span></h2>
                        </div>
                  </div>
        </div>


<div class="new-order">
    <h5 >student - Rented (payment Not done)</h5>
</div>

        <div class="box">
                    <div class="resend wait" style="background-color:  rgb(47, 96, 201);">
                        <div class="right" ><i class="fas fa-play-circle" ></i></div>
                        <div class="letter"><h3>Your Information have been Submitted succesfully <small> pay rent and reserve</small></h3></div>
                    </div>
                  <div class="details-box">
                        <div class="details">
                            <h2>Request Id :<span style="color: rgb(11, 50, 134);">00016</h2>
                            <img src="../resource/Images/uploaded_boarding/2.jpg" class="post_image" alt="" >
                            <h4>post Id :0040</h4>
                            <h4>Nugegoda</h4>
                        </div>
                        <div class="button-pay">
                        <h2>Hand over your payment to complete reservation </h2>
                            <h4>Your informtion have been submitted. continue payment<br/><br/></h4>
                            <h4>Address : <span style="color: rgb(11, 50, 134);">44/A, Kekatiyawaththa Rd., Malapalla</span></h2>
                            <h4>Owner : <span style="color: rgb(11, 50, 134);">Rohini Wickramarachchi</span></h2>
                        </div>
                  </div>
        </div>

<div class="new-order">
    <h5 >student - canceled</h5>
</div>

        <div class="box">
                    <div class="resend wait" style="background-color:rgb(236, 43, 43);">
                        <div class="right" ><i class="fas fa-play-circle" ></i></div>
                        <div class="letter"><h3>request is cancelled <small> canceled on  :  &nbsp;&nbsp;&nbsp;<b>2020/11/23  &nbsp;&nbsp;  14:04:56</b> </small></h3></div>
                    </div>
                  <div class="details-box">
                        <div class="details">
                            <h2>Request Id :<span style="color:rgb(168, 13, 13);">00016</h2>
                            <img src="../resource/Images/uploaded_boarding/2.jpg" class="post_image" alt="" >
                            <h4>post Id :0040</h4>
                            <h4>Nugegoda</h4>
                        </div>
                        <div class="button-pay">
                        <h2>This request has been cancelled! </h2>
                        <br/>
                            <h4> <u>click here </u>to request new boarding place<br/><br/></h4>
                           
                        </div>
                  </div>
        </div>



<?php include 'footer.php'?>
</body>
<script src="../resource/js/home1.js"></script>
<script src="../resource/js/jquery.js"></script>
</html>

<?php $connection->close(); ?>









                
                          