<?PHP 	require '/system/a_boiler_plate.php';

 	session_start();

 	ini_set('display_errors', '1');
 	
 	$homepage 	= 'index_control';
 	$uri 		= 'url';

 	////////////////////////
 	define('HOMEPAGE', $homepage);
 	/////////////////////////////////////////////////
	define('URI', $uri);
	/////////////////////////////////////////////////
	$directory;
	
	walk_dir(ROOT);

	define('DIRECTORY', serialize( $directory ) );

	new a_router;