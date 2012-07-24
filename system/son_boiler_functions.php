<?php

	function __autoload( $class_name ) {
 		require SYSTEM . '/' . $class_name . '.php';
 	}


 	function add_packages( $folder ) {

 		$dir = scandir($folder);

 		foreach ($dir as $key => $result) :
 			
 			if ($result === '.' or $result === '..') continue;

 			$path = $folder . '/' . $result;

		    if (is_dir($path)) :

		    	$name = strtoupper($result);
				define($name, $path);

		    endif;

 		endforeach;
 		
 	}


 	function bind_path() {
 		
 		$args = func_get_args();
 		$str = '';
 		$start = true;
 		foreach($args as $arg) :

 			if($start) :
 				$str .= $arg;
 				$start = false;
 			else :
 				$str .= '/' . $arg;
 			endif;
 		endforeach;
 		return $str;
 	}