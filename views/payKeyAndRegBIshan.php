<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../resource/css/registerIshan.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
	<title>Registration Form</title>
	
</head>


<body class="body0">

	<div class="container">
	<div class="para">
			<h1><b>B</b>oarder <b>I</b>nformation</h1>
			<p>This is the last step! Hurry up and fill this form. Pay the advance(keymoney) to reserve this boarding place for you. </p>
	</div>
	<div class="register">
	<!--<img src="img/new1.png" class="registerProfile">-->
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
		   <form action="../controller/regBIshan.php" method="post" enctype="multipart/form-data">
		   	<p>What is Your Institute? </p>
		   	<input type="text" name="university_name" placeholder="Are you Student? Enter Institute name.">

		  

            <p>Telephone</p>
		   	<input type="text" name="telephone" placeholder="Enter Your Telephone Number.">

		   	<p>Gender</p>
		   	 <div class="radio">
					<input type="radio" name="gender" value="Boy" checked="checked" id="3" >
					<label  for="3">Boy</label>
				</div>
				
				<div class="radio">
					<input type="radio" name="gender" value="Girl" id="4">
					<label for="4">Girl</label>
				</div>

		   	<p>Parent Name</p>
			   <input type="text" name="p_name" placeholder="Enter Your Parent Name">
			<p>Parent Telephone</p>
			   <input type="text" name="p_telephone" placeholder="Enter Your Parent Telephone Number.">




			 <p>Upload Your NIC Images</p>
			   <input type="file" name="nicImg">
			

			<p>Pay KeyMoney</p>
			   <div class="radio">
					<input type="radio" name="pay" value="hand" checked="checked" id="1" onclick="cash()">
					<label  for="1">Cash handover</label>
				</div>
				
				<div class="radio">
					<input type="radio" name="pay" value="online" id="2"onclick="online()">
					<label for="2">Pay Online</label>
				</div>
		   	<input type="submit" name="submit"  >
		   </form>
	</div>
</div>
<script type="text/javascript">
	function cash()
	{
		alert("Are you want to select cash handover payment method.?");

	}
	function online()
	{
		alert("Are you want to select online payment method.?");

	}
	
</script>
<!-- <a  href="payment/payment.php">Pay Online</a> -->
</body>
</html>