<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../resource/css/register.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
	<title>Registration Form</title>
	
</head>
<body class="body2">
	<div class="container">
	<div class="para">
			<h1><b>U</b>ser <b>R</b>egistration</h1>
			<p> Hey there!  Welcome to bodima platform. You are in the <b>most famous boarding Advertising and renting platform</b>. Congratulations for your journey with us!  </p>
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
		   <form action="../controller/registerCon.php" method="post">
		   	<p>Address</p>
		   	<input type="text" name="address" placeholder="Enter Address Name">

		   	<p>Location link</p>
			<input type="text" name="link" placeholder="Enter Location Name">
			   
			<p>Password</p>
		   	<input type="password" name="password" placeholder="Enter Password">
		   	<p>Confirm Password</p>
		   	<input type="password" name="confirmpassword" placeholder="Confirm Password">
		   	<div class="agreement">
                     <div class="term"><b>Term and condition</b></div> 
					<textarea name="aggrement" id="1" cols="30" rows="5">
1. This is a Web platform for Adverting boarding places. We do not assure you about your sensitive information(ex: credit card details). Please create a pay here account before you making online payments.

2. We will use your location information to provide you a better experience. We do not store any searching information or location information on our platform.	
					</textarea>
            </div>
                            
            <div class="check">
                 <input id="check"  type="checkbox" name="check">
				 <div class="agree"> I am agree with term and condition</div> 

                 
            </div>
			<input type="hidden" name="email" value="<?php echo $_GET['email'];?>">
		    <input type="hidden" name="first_name" value="<?php echo $_GET['first_name'];?>">
		    <input type="hidden" name="last_name" value="<?php echo $_GET['last_name'];?>">
		    <input type="hidden" name="nic" value="<?php echo $_GET['nic'];?>">
		    <input type="hidden" name="level" value="<?php echo "boardings_owner";?>">
		   	<input id="register" type="submit" name="register" value="Register">
		   </form>
	</div>
	</div>
	<script src="../resource/js/main.js"></script>
</body>
</html>