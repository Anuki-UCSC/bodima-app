<?php 
require_once ('../config/database.php');
session_start ();
include('../models/reg_userIshan.php');?>
<?php 

if(isset($_GET['requestDelete_id'])){
   $request_id=$_GET['requestDelete_id'];
   $result=reg_userIshan::PendingrequestDelete($connection,$request_id);
   if($result){
      header('Location:../views/pendingReqIshan.php');
   }
   {
     // echo "Mysqli query failed";
   }
}

if(isset($_GET['requestDeleteBO_id'])){
   $request_id=$_GET['requestDeleteBO_id'];
   $result=reg_userIshan::PendingrequestDelete($connection,$request_id);
   if($result){
      header('Location:../views/myBoardingReqIshan.php');
   }
   {
     // echo "Mysqli query failed";
   }
}




if(isset($_GET['requestCAccept_id'])){
   $request_id=$_GET['requestCAccept_id'];
   $result=reg_userIshan::confirmDealAcc($request_id,$connection);
   if($result){
     header('Location:../views/payKeyAndRegBIshan.php');
   }
   
}
if(isset($_GET['reqAccBOwner_id'])){
   $request_id=$_GET['reqAccBOwner_id'];
   $result=reg_userIshan::confirmReqAccBO($request_id,$connection);
   if($result){
     header('Location:../views/myBoardingReqIshan.php');
   }
   
}




 ?>