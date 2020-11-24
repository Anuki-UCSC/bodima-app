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


<div class="new-order">
    <h5 >boarding owner - New request</h5> 
            <!-- Temporary request -->
</div>

        <div class="box">
                    <div class="resend wait" style="background-color:  rgb(141, 243, 141);">
                        <div class="right" ><i class="far fa-check-circle fa-2x"></i></div>
                        <div class="letter"><h3>You have recieved a new request<small> this request will automatically cancel in <b id="countdown">15h 45m 36s</b></small></h3></div>
                    </div>
                  <div class="details-box">
                        <div class="details">
                            <h2>post Id :<span style="color:green;">00016</h2>
                            <img src="../resource/Images/uploaded_boarding/2.jpg" class="post_image" alt="" >
                            <h4>Request Id:0040</h4>
                            <h4>Nugegoda</h4>
                        </div>
                        <div class="button-pay">
                        <h2>New Request Recieved</h2>
                            <h4>arrived at:&nbsp;&nbsp; 2020-11-24 &nbsp;&nbsp; 08:12:34<br/><br/></h4>
                            <h4>from : <span style="color:green;">anukidealwis@gmail.com</span></h2>
                            <h4>massage : <span style="color:green;">None</span></h2>
                            <br/><hr>
                            <h4>to allow <span style="color:green; text-decoration:underline;">anuki</span> to get your boarding place, click 'Accept Request'</h4><br/>
                            <button type="button" class="btn4 Accept_Request" style="background-color: rgb(3, 204, 3);" > Accept Request</button>
                            <button type="button" class="btn1 cancel"> Cancel</button>
                        </div>
                  </div>
        </div>
        

        <div class="new-order">
    <h5 >boarding owner - New Boarder Added</h5> 
            <!-- confirm deal for "rented payment done" customers -->
</div>

        <div class="box">
                    <div class="resend wait" style="background-color: rgb(29, 236, 191);">
                        <div class="right" ><i class="fas fa-user-check fa-2x"></i></div>
                        <div class="letter"><h3 style="margin-top:35px;">Congratulations! You have a new boarder.<small> post number: 0016<br/>request no: 0034</small></h3></div>
                    </div>
                  <div class="details-box">
                        <div class="details">
                            <h2>Payment :<span style="color: rgb(6, 165, 131);">successful</h2><br/><br/>
                            <!-- <img src="../resource/Images/uploaded_boarding/2.jpg" class="post_image" alt="" > -->
                            <h2>amount : <span style="color: rgb(6, 165, 131);">Rs. 6000</span></h2><br/>
                            <h4>recieved at: <span style="color: rgb(6, 165, 131);">2020-11-24  14:05:33</span></h4>
                            <h4>payment id:181034534</h4>
                        </div>
                        <div class="button-pay">
                        <h2>New person has done Advance payment! </h2>
                            <h4>Name: <span style="color: rgb(6, 165, 131);">Ishan Ediriweera</span><br/></h4>
                            <h4>Gender: <span style="color: rgb(6, 165, 131);">Male</span><br/></h4>
                            <h4>NIC: <span style="color: rgb(6, 165, 131);">975544332v</span><br/></h4>
                            <h4>telephone no: <span style="color: rgb(6, 165, 131);">0771122334</span><br/></h4>
                            <h4>University/working at: <span style="color: rgb(6, 165, 131);">University of Colombo</span><br/></h4>
                            
                            <br/><hr>
                            <h4><span style="color: rgb(6, 165, 131); text-decoration:underline;">click here</span> to view My boarders</h4><br/>
                        </div>
                  </div>
        </div>


<div class="new-order">
    <h5 >boarding owner - Add as a new boarder</h5> 
            <!-- confirm deal for "rented payment done" customers -->
</div>

        <div class="box">
                    <div class="resend wait" style="background-color:rgb(1, 167, 233);">
                        <div class="right" style="color:white;" ><i class="fas fa-user-plus fa-2x"></i></div>
                        <div class="letter"><h3 style="margin-top:35px;">Add As a new Boarder<small> post number: 0016<br/>request no: 0034</small></h3></div>
                    </div>
                  <div class="details-box">
                       
                        <div class="button-pay" style="width:60%;">
                        <h2>New person has manual Payment </h2>
                            <h4>Name: <span style="color: rgb(6, 165, 131);">Ishan Ediriweera</span><br/></h4>
                            <h4>Gender: <span style="color: rgb(6, 165, 131);">Male</span><br/></h4>
                            <h4>NIC: <span style="color: rgb(6, 165, 131);">975544332v</span><br/></h4>
                            <h4>telephone no: <span style="color: rgb(6, 165, 131);">0771122334</span><br/></h4>
                            <h4>University/working at: <span style="color: rgb(6, 165, 131);">University of Colombo</span><br/></h4>
                            
                            <br/><hr>
                            <h4><span style="color: rgb(6, 165, 131); text-decoration:underline;">click here</span> to view My boarders</h4><br/>
                        </div>

                        <div class="details"  style="width:40%; border-right:none;border-left :1px solid; padding-top:20px; padding:15px;">

                            <!-- <img src="../resource/Images/uploaded_boarding/2.jpg" class="post_image" alt="" > -->
                            <h2>amount : <span style="color: rgb(6, 165, 131);">Rs. 6000</span></h2><br/>
                            
                            <h4>If Your payment recieved, click below to add as a boarder.</h4>
                            <button type="button" class="btn5 Accept_Request" style="background-color: rgb(3, 204, 3); margin-left:none; width:20vw;" ><i class="fas fa-hand-holding-usd"></i> Payment Recieved<br/>&<br/><i class="fas fa-user-plus"></i> Add to my boarders</button>
                        </div>
                  </div>
        </div>
         



<?php include 'footer.php'?>
</body>
<script src="../resource/js/home1.js"></script>
<script src="../resource/js/jquery.js"></script>
</html>

<?php $connection->close(); ?>









                
                          