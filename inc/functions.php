<?php
	
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function chop_non_nums_chars($txt) {
		$input = preg_replace('#[^0-9]#i', '', $txt);
		return $input;
	}

	function check_for_phone_digits($txt) {
		if(strlen($txt) == 10){
			$response = find_matched_area_code($txt);
			return $response['Description'];
		} else {
			return "ERROR";
		}
	}

	function find_matched_area_code($txt) {
		global $connection;

		$txt_input = substr($txt, 0, 3);

		$query = "SELECT * ";
		$query .= "FROM areacodes ";
		$query .= "WHERE `Area Code` = {$txt_input} ";
		$query .= "LIMIT 1";
		$description_set = mysqli_query($connection, $query);
		confirm_query($description_set);
		if($description = mysqli_fetch_assoc($description_set)) {
			return $description;
		} else {
			return null;
		}
	}