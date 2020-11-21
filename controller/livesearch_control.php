<?php
	require_once ('../config/database.php');
    require_once ('../models/live_search.php');

$output = '';


if(isset($_POST["qry"]))
{
	if(str_word_count($_POST["qry"])>1)
	{

		$result=live_search::multiple_word_match_b_post($connection,$_POST["qry"]);

	}else{

		$result=live_search::single_word_find_b_post($connection,$_POST["qry"]);

	}
	
}
else
{
	$result=live_search::all_b_posts($connection);
}




if(mysqli_num_rows($result) > 0)
{
	
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
		<a class="divtable" href="../controller/adertisement_control.php?id='.$row["B_post_id"].'">
		<div class="table-responsive" >
		<table class="table table bordered">
			<tr>
				<th class="img_th" rowspan=6>
				<div class="inner_img">
				<img src="'.$row["image"].'" class="profile_image" alt="" >
				</div>
				</th>
				<th>No</th><td>'.$row["B_post_id"].'</td>
			</tr>
			<tr>
				<th>Address</th><td>'.$row["lane"].', '.$row["city"].'</td>
			</tr>
			<tr>
				<th>City</th><td>'.$row["city"].'</td>
			</tr>
			<tr>
				<th>girls/boys</th><td>'.$row["girlsBoys"].'</td>
			</tr>
			<tr>
				<th>cost per person</th><td>'.$row["cost_per_person"].'</td>
			</tr>
			<tr>
				<th>description</th><td>'.$row["description"].'</td>
			</tr>
		</table>
		</div>
		</a>
		';
	}
	echo $output;
}
else
{
	echo 'Search with another keyword';
}
?>