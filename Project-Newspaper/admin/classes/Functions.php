<?php 
	class Redirect {
		public function __construct($url = null){
			if($url){
				header("Location: $url");
			}
		}
	}
 ?>