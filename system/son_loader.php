<?php

class son_loader extends son_base
{
	
	public function __construct()
	{
		//$this->controller( PAGE );

		echo 'hi';





	}





	/*
	public function controller( $c, $f = null)
	{
		$url = CONTROLLER . $c . ".php";
		require_once ( $url );
		
		$c = $this->removeSub( $c );
		
		$controller = new $c();
		
		if( !empty($f) )
		{
			$controller->$f();
		}
	}
	*/
}	//	End	::	son_loader.php

?>
   