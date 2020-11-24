
<!DOCTYPE html>
<html lang="en">
<head>
	<title>&#127835; Post Food</title>
	<link href="../resource/css/style2.css" rel="stylesheet">

	<style>

	</style>
</head>
<body class="food">

<div class="sub-container" id="img-sub">
				<div><img src="../resource/icons/other/food icon/fork.png" alt="logo" class="verticle-center" width=50 height=auto  /></div>
		

		<div class="postBoarding"><h1>Food Advertisement Form</h1></div><!-- Foodpost -->

	</div>
		<div class="main">

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


		<div class="part1">

			<div class="second_name"><h2>Resturent Details</h2></div>
			<form action="../controller/foodPostCon.php" method="post" enctype="multipart/form-data"  id="postBoarding">
			

				

			    <h3 class="name">Resturent Name </h3 >
				<!--<label for="">Address  </label><br>-->
				<input  type="text" name="resName" id="resName"  >
				<?php if(isset($errors['err1'])) echo "<div class='error_msg'>".$errors['err1']."</div>"; ?>

				
				<h3 class="name">Address </h3 >
				<!--<label for="">Address  </label><br>-->
				<input  type="text" name="address" id="address"  >
				<?php if(isset($errors['err2'])) echo "<div class='error_msg'>".$errors['err2']."</div>"; ?>

				<h3 class="name">Location</h3 >
				<!-- <label for="">Location  </label><br> -->
				<input  type="text" name="location" id="location" ><br>

				<h3 class="name">Description </h3 >
				<!--<input type="text" name="description" id="description" placeholder="Enter Description" ><br><br>-->
				<textarea name="description" id="description" rows="3" cols="26"></textarea>

				
				<h3 class="nameImage">Resturent Cover Image</h3 >
				<input type="file" name="BCimage" id="BCimage"><br>

				<!--<label for="">Boarding Images  </label><br>
				<input type="file" name="Bimage{}" id="Bimage" multiple ><br><br>-->

				</div>

				<div class="part2">

				<h3 class="name">Type</h3 >
				<label class="radio">
					<input type="radio" name="type" id="shortTerm" value="Short Term"><span id="shortTerm" >&nbsp; <abbr title="Anukiiiiiiiiii">Short Term</abbr></span>&nbsp;&nbsp;
					<input type="radio" name="type" id="longTerm" value="Long Term"><span id="longTerm" >&nbsp;<abbr title="Anukiiiiiiiiii">Long Term</abbr></span>&nbsp;&nbsp;<br>
					<?php if(isset($errors['err3'])) echo "<div class='error'>".$errors['err3']."</div>"; ?>
				</label>
				

		
				<h3 class="name">Ordering Time Deadline </h3 >
				<!--<label for="">Address  </label><br>-->
				<input type="time" name="otDeadline" id="otDeadline" value="21:00:00" >
				<?php if(isset($errors['err4'])) echo "<div class='error_msg'>".$errors['err4']."</div>"; ?>
				
				
				
			

				<div class="group">
				<h3 class="name">Avertisement Lifespan (Days)</h3 >
				
				<input type="number" name="Lifespan" id="lifespan" value=30 class="control prc" >
				<?php   if(isset($errors['err5'])){
							echo "<div class='error2'>".$errors['err5']."</div>"; 
						}elseif(isset($errors['err6'])){
							echo "<div class='error2'>".$errors['err6']."</div>"; 
						}
				?>
				</div>
				
				<div class="group">
				
				<h3 class="name">Avertisement Amount : Rs</h3 >
				<!-- <output  name="result" id="result"></output> -->
				<input type="text" disabled name="Aamount" id="Aamount" value=3000  ><br><br>
				</div>
					
				<br>
				
				<label for="">&nbsp; </label><br>
				<input type="submit" name="submit" id="submit" value="submit"  ><br>	<br><br>
					
				
				
			

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