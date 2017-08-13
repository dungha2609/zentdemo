<?php 
	include_once('classes/DB.php');
	include_once('classes/Session.php');
	include_once('classes/Functions.php');

	$db = new DB();
	$db->connect();

	$_DOMAIN = "http://wa06.zent/Project-Newspaper/admin/";

	date_default_timezone_get("Asia/Ho_Chi_Minh");
	$date_current = date("Y-m-d H:i:sa");

	$session = new Session();
	$session->start();

	($session->get() != '') ? $user = $session->get() : $user = '';
	
	if($user){
		$sql_get_data_user = "SELECT * FROM accounts WHERE username = '$user'";

		if($db->num_rows($sql_get_data_user)){
			$data_user = $db->fetch_assoc($sql_get_data_user, 1);
		}
	}

 ?>