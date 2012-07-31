<?PHP 	require '/system/a_boiler_plate.php';
 	
 	$homepage 	= 'index';
 	$uri 		= 'url';

 	define('HOMEPAGE', $homepage);

	define('URI', $uri);

	$directory;
	
	walk_dir(ROOT);

	define('DIRECTORY', serialize( $directory ) );

	new a_router;

	//	END :: index.php