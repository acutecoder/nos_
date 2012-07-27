<?php 	//require_once 'son_boiler_functions.php';	define('URI', $uri);	define('HOMEPAGE', $homepage);
/*
 * FRAMEWORK FOLDERS ARE MAPPED TO CONSTANTS
 * FOR EASE OF USE
 */

//	APPLICATION ROOT DIRECTORY
	$root = $_SERVER['DOCUMENT_ROOT'].stripcslashes(dirname($_SERVER['PHP_SELF'])).'/';
	define('ROOT', $root);

//	FOLDER MAPPING ::

	function walk_dir( $path ) {
		$dirs = scandir($path);
		foreach( $dirs as $folder ) :

 			if ( $folder === '.' or $folder === '..' ) continue;
 			if( strpos( $folder, '.') === 0 ) continue;

		    if ( is_dir( $path . '/' . $folder ) ) :

		    	$name = strtoupper( $folder );
				define( $name, $path . '/' . $folder );

				//echo $name . '::' . constant( $name ) . '<br />';

				global $directory;
				$directory[] = constant( $name );
				walk_dir( constant( $name ) );
		    endif;
		endforeach;
	}


	function __autoload( $name ) {
		$dir = unserialize(DIRECTORY);
		if( $dir ) :
			foreach( $dir as $folder ) :
	                $file = $name . '.php';
	            	$path = $folder . '/' . $file;
	                if( file_exists( $path ) ) :
	                    require_once $path;
	                    return;
	                endif;
	        endforeach;
	        echo '<h1 style="display:block">Class :: ' . $name . ' does not exist</h1>';
	       // require_once '404.html';
		endif;
	}