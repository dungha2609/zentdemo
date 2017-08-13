<?php 
	class Session {

		public function start(){
			session_start();
		}

		public function set($user){
			$_SESSION['user'] = $user;
		}

		public function get(){
			isset($_SESSION['user']) ? $user = $_SESSION['user'] : $user = '';

			return $user;
		}

		public function destroy(){
			session_destroy();
		}
	}
 ?>