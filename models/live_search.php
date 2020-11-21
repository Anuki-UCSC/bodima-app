<?php 

class live_search{
												//$connect >> $connection

  	public static function multiple_word_match_b_post($connection,$qry){

		  	$query = "
			SELECT * FROM `boarding_post` WHERE MATCH(`category`, `girlsBoys`,`image`, `house_num`, `lane`, `city`, `district`, `description`) against('{$qry}');";

			echo $query;
			die();
			$result = mysqli_query($connection, $query);
			return $result;
  	}


	public static function single_word_find_b_post($connection,$qry){

			$search = mysqli_real_escape_string($connection,$qry);
			$query = "
			SELECT * FROM boarding_post 
			WHERE category LIKE '%".$search."%'
			OR girlsBoys LIKE '%".$search."%' 
			OR person_count LIKE '%".$search."%' 
			OR cost_per_person LIKE '%".$search."%' 
			OR lane LIKE '%".$search."%'
			OR city LIKE '%".$search."%'
			OR district LIKE '%".$search."%'
			OR description LIKE '%".$search."%'
			";
			

			$result = mysqli_query($connection, $query);
			return $result;

	}


	public static function all_b_posts($connection){

			$query = "SELECT * FROM boarding_post ORDER BY B_post_id";
			$result = mysqli_query($connection, $query);
			return $result;

	}









}

  ?>