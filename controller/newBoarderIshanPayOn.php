<?php 
require_once ('../config/database.php');
        require_once ('../models/reg_userIshan.php');
     
        session_start();
      


 ?>
 <script type="text/javascript">
 	alert("Congralutions, You are goto new Interface, Because you are boarder");
 </script>
 <?php 
 if (isset($_GET['click'])) {
 	$Bid=$_GET['Bid'];
 	unset($_SESSION['Reg_id']);
 	unset($_SESSION['level']);
 	$student_email=$_SESSION['email'];

 	$_SESSION['Bid']=$Bid;
 	$_SESSION['level']="boarder";

$result=reg_userIshan::updateStTOBorder($connection,$student_email);
if ($result) {
	header('Location:../index.php');
}else{
	header('Location:../views/rentedPayIshan.php');
}
 	
 	
 	  // echo "<pre>";

    //     print_r($_SESSION); 
    //     echo "</pre>";
 	
 }




  ?>