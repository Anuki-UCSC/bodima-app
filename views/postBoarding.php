
<!DOCTYPE html>
<html lang="en">
<head>
	<title>&#127969; Post Boarding</title>
	<link href="../resource/css/style1.css" rel="stylesheet">

	<style>

	</style>
</head>
<body class="boarding">



	<div class="sub-container" id="img-sub">
				<div><img src="../resource/icons/boarder/boarding/Pay Rent.png" alt="logo" class="verticle-center" width=50 height=auto  /></div>
		

		<div class="postBoarding"><h1>Boarding Advertisement Form</h1></div><!-- postBoarding -->

	</div>
	
	

		<div class=main>

		<div class='main-new'>

<div class=error-post>
	<?php
	if(isset($_GET['param']))
	{
		$errors=$_GET['param'];
		/*
		foreach($errors as $error)
		{
			echo '<p class="error"><b>'.$error.'</b></p>';
		}*/
		//print_r($errors);
	}
	
	?>
	</div>	
		
	</div><!--  main-new -->


			<div class="part1">
	
			<form action="../controller/postBoardingCon.php" method="post" enctype="multipart/form-data"  id="postBoarding">
			<!-- <div id="name"> -->

				<!--<label for="">Address  </label><br>-->
				<h3 class="name">Address </h3 >
				
				<input class="hnumber" type="text" name="Hnumber" id="Hnumber"  placeholder="House Number / Name">
				<!-- <label class="hLable"> House Number / Name  </label><br> -->
				<?php if(isset($errors['err1'])) echo "<div class='error_msg'>".$errors['err1']."</div>"; ?>

				<br>
				<input class="lane" type="text" name="lane" id="lane" placeholder="Lane" >
				<!-- <label class="lLable" > Lane </label><br> -->
				<?php if(isset($errors['err2'])) echo "<div class='error_msg'>".$errors['err2']."</div>"; ?>

				<br>
				
				<input class="city" type="text" name="city" id="city" placeholder="City">
				<!-- <label class="cityLable" > City  </label><br> -->
				<?php if(isset($errors['err3'])) echo "<div class='error_msg'>".$errors['err3']."</div>"; ?>

				<br>
				
				<input class="district" type="text" name="district" id="district" placeholder="District" >
				<!-- <label class="lDis" >District  </label><br> -->
				<?php if(isset($errors['err4'])) echo "<div class='error_msg'>".$errors['err4']."</div>"; ?>


			<!-- </div>id name	 -->

				<h3 class="name">Location</h3 >
				<!-- <label for="">Location  </label><br> -->
				<input type="text" name="location" id="location" ><br>
				

				<h3 class="name">Description </h3 >
				<!--<input type="text" name="description" id="description" placeholder="Enter Description" ><br><br>-->
				<textarea name="description" id="description" rows="3" cols="26"></textarea><br>

				
				<h3 class="name">Boarding Cover Image</h3 ><br>
				<input type="file" name="BCimage" id="BCimage" value=../resource/Images/uploaded_boarding/defaultbp1.jpg ><br>
				

				<!--<label for="">Boarding Images  </label><br>
				<input type="file" name="Bimage{}" id="Bimage" multiple ><br><br>-->
				
			
				
				</div>	

			<div class="part2">


			

				<h3 class="name">Renting For Girls Or Boys</h3 >
				<label class="radio">
					<input type="radio" name="gender" value="Boys"> Boys
					<input type="radio" name="gender" value="Girls"> Girls 
					<?php if(isset($errors['err6'])) echo "<div class='error'>".$errors['err6']."</div>"; ?>

				</label>
			
			<h3 class="name">Renting Options</h3 >
				<label class="radio">
					<input type="radio" name="individual" id="individual" value="Individual"><span id="individual" >&nbsp; Individual</span>&nbsp;&nbsp;
					<input type="radio" name="individual" id="RoomOrHome" value="RoomOrHome"><span id="RomeOrHome" >&nbsp; Rome Or Home</span>&nbsp;&nbsp;
					<?php if(isset($errors['err5'])) echo "<div class='error'>".$errors['err5']."</div>"; ?>

				</label>
				

				
			
				<h3 class="name">Total Person Count</h3 >
				<input type="number"  name="Pcount" id="pcount" value=1  >
				<?php   if(isset($errors['err7'])){
							echo "<div class='error2'>".$errors['err7']."</div>"; 
						}elseif(isset($errors['err8'])){
							echo "<div class='error2'>".$errors['err8']."</div>"; 
						}elseif(isset($errors['err9'])){
							echo "<div class='error2'>".$errors['err9']."</div>"; 
						} 
				?>


				
				<h3 class="name">Cost Per Person For Month</h3 >
				<input type="text" name="CPperson" id="cpperson"  >
				<?php   if(isset($errors['err10'])){
							echo "<div class='error2'>".$errors['err10']."</div>"; 
						}elseif(isset($errors['err11'])){
							echo "<div class='error2'>".$errors['err11']."</div>"; 
						}
				?>

				
				<h3 class="name">KeyMoney</h3 >
				<input type="text" name="Keymoney" id="Keymoney" >
				<?php   if(isset($errors['err12'])){
							echo "<div class='error2'>".$errors['err12']."</div>"; 
						}elseif(isset($errors['err13'])){
							echo "<div class='error2'>".$errors['err13']."</div>"; 
						}
				?>

				<div class="group">
				<h3 class="name">Avertisement Lifespan (Days)</h3 >
				
				<input type="number"  name="Lifespan" id="lifespan" value=30  class="control prc" >
				<?php   if(isset($errors['err14'])){
							echo "<div class='error2'>".$errors['err14']."</div>"; 
						}elseif(isset($errors['err15'])){
							echo "<div class='error2'>".$errors['err15']."</div>"; 
						}
				?>
				</div>
				
				<div class="group">
				
				<h3 class="name">Avertisement Amount :     Rs  </h3 >
				<!-- <output  name="result" id="result"></output>   -->
				<input type="text"  disabled  name="Aamount" id="Aamount" value=3000 ><br><br>
				</div>
					
				<br>
				<label for="">&nbsp; </label><br>
				<input type="submit" name="submit" id="submit" value="Save"  ><br>	<br><br>
					
						
				
			

				<script src="../resource/js/jquery-3.5.1.min.js"></script>
				<script>
					$('.group').on('input','.prc',function(){
						var totalsum =0;
						$('.group .prc').each(function(){
							var inputVal = $(this).val();
							if($.isNumeric(inputVal)){
								totalsum = parseFloat(inputVal)*100;
							}

						});
						$('#Aamount').val(totalsum);
						//$('#result').text(totalsum);
						
						//result=$_SESSION['totalsum']

					});

					$('form').submit(function(e){
						$(':disabled').each(function(e){
							$(this).removeAttr('disabled');
						})

					});
				</script>


			
				
			</form>

			</div>

		<div><!-- main -->
		
</body>
</html>