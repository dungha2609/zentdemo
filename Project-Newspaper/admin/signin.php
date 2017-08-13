<?php 
	include_once('core/init.php');

	if(isset($_POST['user_signin']) && $_POST['pass_signin']){
		$user_signin = trim(htmlspecialchars(addslashes($_POST['user_signin'])));
		$pass_signin = trim(htmlspecialchars(addslashes($_POST['pass_signin'])));

		$show_alert = "<script>$('#formSignin .alert').removeClass('hidden');</script>";
		$hide_alert = "<script>$('#formSignin .alert').addClass('hidden');</script>";

		$sql_check_user_exist = "SELECT username FROM accounts WHERE username = '{$user_signin}'";

		if($db->num_rows($sql_check_user_exist)){
			$pass_signin = md5($pass_signin);

			$sql_check_signin = "$sql_check_user_exist AND password = '{$pass_signin}'";

			if($db->num_rows($sql_check_signin)){
				$sql_check_stt = "$sql_check_signin AND status = 0";

				if($db->num_rows($sql_check_stt)){
					$session->set($user_signin);
					$db->close();
					echo 1;
				} else {
					echo $show_alert. 'tai khoan da bi khoa !';
				}
			} else {
				echo $show_alert. 'sai password !';
			}
		} else {
			echo $show_alert. 'ten dang nhap ko ton tai !';
		} 
	} else {
		new Redirect($_DOMAIN);
	}
 ?>