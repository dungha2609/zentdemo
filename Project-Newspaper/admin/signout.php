<?php 
	include_once("core/init.php");

	$session->destroy();
	new Redirect($_DOMAIN);
 ?>