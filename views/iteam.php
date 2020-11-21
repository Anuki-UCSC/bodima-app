
<!DOCTYPE html>
<html lang="en">
<head>
	<title>&#127829;Add Iteam </title>
	<link href="../resource/css/style.css" rel="stylesheet">

	<style>

	</style>
</head>
<body class="food">
 <?php
//print_r($_POST);
//print_r($_FILES);
?>

	<div class="postBoarding"><h1>Add Iteam</h1></div><!-- postBoarding -->
		<div class=main>
			<form action="../controller/iteamCon.php" method="post" enctype="multipart/form-data"  id="postBoarding">
			

				<!--<label for="">Address  </label><br>-->
				<h3 class="name">Product Name </h3 >
				
				<input class="PName" type="text" name="pName" id="pName" >

				
				
				<h3 class="name">Product Image</h3 >
				<input type="file" name="pimage" id="pimage"><br>


				<h3 class="name">Price</h3 >
				<input type="text" name="price" id="price" >

			
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
				<input type="submit" name="submit" id="submit" value="save"  ><br>


				<label for="">&nbsp; </label><br>
				<input type="submit" name="submit" id="submit" value="Add Iteam"  ><br>	<br><br>

			
				
			</form>

		<div><!-- main -->
</body>
</html>