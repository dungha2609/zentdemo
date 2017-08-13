<?php 
	include_once('core/init.php');
	include_once('includes/header.php');

	if($user){
		include_once('templates/sidebar.php');
		include_once('templates/content.php');
	} else {
		include_once('templates/signin.php');
	}

	include_once('includes/footer.php');

 ?>