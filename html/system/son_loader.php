<?php

	class son_loader extends son_base
	{
		
		public function __construct()
		{	
			//$c = $this->removeSub( $c );

			$c = http::URI();

			$this->__autoload($c);
			//$controller = new $c();
			
			if( !empty($f) )
			{
				$controller->$f();
			}
		}



	}	//	End	::	son_loader.php 