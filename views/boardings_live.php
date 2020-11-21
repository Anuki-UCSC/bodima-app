<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../resource/css/boardings_live.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
  
    <title>search boarding</title>
</head>
<body>
	<div class="whole">
		<?php include 'nav.php' ?>
		<!-- <div class="live_container"> -->
			<div class="live_searchbar">
				<span class="input-group-addon">Search</span>
				<input type="text" name="search_text" id="search_text" 
				placeholder="Search by any key word" class="form-control" />
			</div>

			<div class="popup_signin">
				
			<a href="../views/register.php">sign up here</a>
			<span id="close">&times;</span>
		</div>
		
			<div class="outer_result_block">
				<div id="result"></div>
			
			</div>
			<div class="right_bar">
				right bar
			</div>
			<!-- <div style="clear:both"></div> -->
		<!-- </div> -->
		<div class="popup_signin">
			<a href="../views/register.php">sign up here</a>
		</div>
	</div>




<script>
$(document).ready(function(){
	load_data();
	function load_data(qry)
	{
		$.ajax({
			url:"../controller/livesearch_control.php",
			method:"post",
			data:{qry:qry},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search).css({"backgroundColor":"black",
        "color":"white"});
		}
		else
		{
			load_data();			
		}
	});
});


$('th').css({"backgroundColor":"black",
        "color":"white"});
</script>


</body>
</html>
 