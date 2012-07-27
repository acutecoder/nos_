<?php

	class son_router extends son_base
	{
		
		public function __construct()
		{	
			$c = http::URI();

			$c = $c .= '_control';
			$controller = new $c();
			
			if( !empty($f) )
			{
				$controller->$f();
			}
		}



	}	//	End	::	son_loader.php 