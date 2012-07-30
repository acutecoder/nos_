<?PHP 	require '/system/a_boiler_plate.php';
 	
 	$homepage 	= 'index';
 	$uri 		= 'url';

	ini_set('display_errors', '1');	
 	////////////////////////
 	define('HOMEPAGE', $homepage);
 	/////////////////////////////////////////////////
	define('URI', $uri);
	/////////////////////////////////////////////////
	$directory;
	
	walk_dir(ROOT);

	define('DIRECTORY', serialize( $directory ) );

	new a_router;

	//	END :: index.php