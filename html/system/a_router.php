<?php

	class a_router extends a_base {
		
		public function __construct() {

			$c = http::URI();
			
			#$c = $c .= '_control';
			$controller = new $c();
			
			if( !empty($f) )	$controller->$f();
		}



	}	//	End	::	son_loader.php 