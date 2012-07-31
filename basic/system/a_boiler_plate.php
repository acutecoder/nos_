<?php 	
/*
 * FRAMEWORK FOLDERS ARE MAPPED TO CONSTANTS
 * FOR EASE OF USE
 */
//	APPLICATION ROOT DIRECTORY
	$root = $_SERVER['DOCUMENT_ROOT'].stripcslashes(dirname($_SERVER['PHP_SELF'])).'/';
	define('ROOT', $root);

//	FOLDER MAPPING ::

	function walk_dir( $path ) {

		$handle = opendir( $path );

		$dirs = readdir( $handle );

		while( false !== ( $folder = readdir( $handle ) ) ) :

 			if( $folder === '.' or $folder === '..' ) continue;
 			if( strpos( $folder, '.') === 0 ) continue;

		    if ( is_dir( $path . '/' . $folder ) ) :

		    	$name = strtoupper( $folder );
				define( $name, $path . '/' . $folder );

				global $directory;
				$directory[] = constant( $name );
				walk_dir( constant( $name ) );

		    endif;

		endwhile;

		closedir( $handle );
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

		endif;
	}
	//	END :: system / a_boiler_plate.php