<?php
require_once '../../inc/db_connection.php';
require_once '../../inc/functions.php';

if(isset($_POST["txt"])){
	$txt = $_POST["txt"];
	$txt_input = chop_non_nums_chars($txt);
	$response = check_for_phone_digits($txt_input);
	echo htmlentities($response);
	exit;
}