
<!DOCTYPE html>
<html lang="en">
<head>
	<title>&#127835; Post Food</title>
	<link href="../resource/css/style.css" rel="stylesheet">

	<style>

	</style>
</head>
<body class="food">

	<div class="postBoarding"><h1>Post On Your Site</h1></div><!-- postBoarding -->
		<div class="main">

		<div class=error-post>
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
		</div>

			<div class="second_name"><h2>Resturent Details</h2></div>
			<form action="../controller/foodPostCon.php" method="post" enctype="multipart/form-data"  id="postBoarding">
			


			    <h3 class="name">Resturent Name </h3 >
				<!--<label for="">Address  </label><br>-->
				<input type="text" name="resName" id="resName"  >

				
				<h3 class="name">Address </h3 >
				<!--<label for="">Address  </label><br>-->
				<input type="text" name="address" id="address"  >

				<h3 class="name">Location</h3 >
				<!-- <label for="">Location  </label><br> -->
				<input type="text" name="location" id="location" ><br>

				<h3 class="name">Description </h3 >
				<!--<input type="text" name="description" id="description" placeholder="Enter Description" ><br><br>-->
				<textarea name="description" id="description" rows="5" cols="50"></textarea><br>

				
				<h3 class="name">Resturent Cover Image</h3 >
				<input type="file" name="BCimage" id="BCimage"><br>

				<!--<label for="">Boarding Images  </label><br>
				<input type="file" name="Bimage{}" id="Bimage" multiple ><br><br>-->
			
				<h3 class="name">Type</h3 >
				<label class="radio">
					<input type="radio" name="type" id="shortTerm" value="Short Term"><span id="shortTerm" >&nbsp; Short Term</span>&nbsp;&nbsp;
					<input type="radio" name="type" id="longTerm" value="Long Term"><span id="longTerm" >&nbsp;Long Term</span>&nbsp;&nbsp;<br>
				</label>
				

		
				<h3 class="name">Ordering Time Deadline </h3 >
				<!--<label for="">Address  </label><br>-->
				<input type="time" name="otDeadline" id="otDeadline"  >
				
				
				
			

				<div class="group">
				<h3 class="name">Avertisement Lifespan (Days)</h3 >
				
				<input type="number" name="Lifespan" id="lifespan" value=30 class="control prc" >
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

		<div><!-- main -->
</body>
</html>