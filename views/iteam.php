
<!DOCTYPE html>
<html lang="en">
<head>
	<title>&#127829;Add Iteam </title>
	<link href="../resource/css/style3.css" rel="stylesheet">

	<style>

	</style>
</head>
<body class="food">
 <?php
//print_r($_POST);
//print_r($_FILES);
?>

<div class=error-post>
	<?php
	if(isset($_GET['param']))
	{
		$errors=$_GET['param'];
		
		// foreach($errors as $error)
		// {
		// 	echo '<p class="error"><b>'.$error.'</b></p>';
		// }
		//print_r($errors);
	}
	
	?>
	</div>	
		


<div class="sub-container" id="img-sub">
				<div><img src="../resource/icons/other/food icon/chicken.png"logo" class="verticle-center" width=50 height=auto  /></div>
		

		<div class="postBoarding"><h1>Add Iteam Form</h1></div><!-- postBoarding -->

	</div>


	
		<div class="main">
			<form action="../controller/iteamCon.php" method="post" enctype="multipart/form-data"  id="postBoarding">
			

				<!--<label for="">Address  </label><br>-->
				<h3 class="name">Product Name </h3 >
				
				<input class="PName" type="text" name="pName" id="pName" >
				<?php if(isset($errors['err1'])) echo "<div class='error'>".$errors['err1']."</div>"; ?>

				
				
				<h3 class="nameImage">Product Image</h3 >
				<input type="file" name="pimage" id="pimage"><br>


				<h3 class="namePrice">Price</h3 >
				<input type="text" name="price" id="price" >
				<?php   if(isset($errors['err2'])){
							echo "<div class='error2'>".$errors['err2']."</div>"; 
						}elseif(isset($errors['err3'])){
							echo "<div class='error2'>".$errors['err3']."</div>"; 
						}
				?>

			<br>
			
				
				<label class="radio">
					<input type="checkbox" name="breakfirst" id="breakfirst" value="1"><span id="breakfirst" >&nbsp;Breakfirst</span>&nbsp;&nbsp;
					
				</label>
				
		<br>
				
				<label class="radio">
					<input type="checkbox" name="lunch" id="lunch" value="1"><span id="lunch" >&nbsp; Lunch</span>&nbsp;&nbsp;<br>
					
				</label>
				
        <br>
        
				
				<label class="radio">
					<input type="checkbox" name="dinner" id="dinner" value="1"><span id="dinner" >&nbsp;Dinner</span>&nbsp;&nbsp;<br>
					
				</label>
						
				

				<label for="">&nbsp; </label><br>
				<input type="submit" name="submit" id="submit" value="save"  >


				<label for="">&nbsp; </label><br>
				<input type="submit" name="submit" id="submit" value="Add Iteam"  >

			
				
			</form>
</div>
		
</body>
</html>