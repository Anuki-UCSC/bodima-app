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
		   <form action="../controller/regBIshan.php" method="post">
		   	<p>What is Your University? </p>
		   	<input type="text" name="first_name" placeholder="Are you Student? Enter University name.">

		   	<p>Gender</p>
		   	<input type="text" name="gender" placeholder="Enter Your Gender.">

            <p>Telephone</p>
		   	<input type="text" name="telephone" placeholder="Enter Your Telephone Number.">

		   	<p>Parent Name</p>
			   <input type="text" name="p_name" placeholder="Enter Your Parent Name">
			<p>Parent Telephone</p>
			   <input type="text" name="email" placeholder="Enter Your Parent Telephone Number.">

			 <p>Upload Your Nic Images</p>
			   <input type="file" name="nicImg">
			

			<p>Pay KeyMoney</p>
			   <div class="radio">
					<input type="radio" name="pay" value="hand" checked="checked" id="1">
					<label  for="1">By Hand Over</label>
				</div>
				
				<div class="radio">
					<input type="radio" name="pay" value="online" id="2">
					<label for="2">Pay Online</label>
				</div>
		   	<input type="submit" name="submit" >
		   </form>
	</div>
</div>
<!-- <a  href="payment/payment.php">Pay Online</a> -->
</body>
</html>