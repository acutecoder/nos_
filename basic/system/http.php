<?php
	class http {

		public static function URI() {
			
			$full_page = HOMEPAGE;
			
			if( !empty( $_GET[URI] ) )	$full_page = $_GET[URI];

			return $full_page;
		}
	}
	//	END ::	http.php