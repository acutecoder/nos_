<?php
	class a_router extends a_base {
		
		public function __construct() {

			$control = http::URI();
			$control .= '_control';
			if( class_exists( $control ) ) new $control();
			else require ROOT . '/404.html';
		}
	}	
	//	END	::	a_router.php 