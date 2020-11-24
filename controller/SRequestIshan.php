<?php session_start(); ?>
<?php include('../config/database.php');?>

<?php include('../models/reg_userIshan.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Request Page</title>
</head>
<body>
	

<?php 

	
if (isset($_POST['send_request'])) {
    $B_post_id=$_POST['B_post_id']; 
 	$BOid=$_POST['BOid'];
    $message=$_POST['comment'];
    $student_email=$_SESSION['email'];
	$student_name=$_SESSION['first_name'];

    $result=reg_userIshan::insertReq($connection,$student_email,$BOid,$B_post_id,$message);
 
 header('Location:../views/pendingReqIshan.php?id='.$B_post_id.'');

	
}


 ?>





</body>
</html>