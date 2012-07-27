<?PHP 	require '/system/son_boiler_plate.php';

 	session_start();

 	ini_set('display_errors', '1');
 	
 	$homepage = 'Index';
 	$uri = 'url';

 //	SUFFIX

 	////////////////////////
 	define('HOMEPAGE', $homepage);
 	/////////////////////////////////////////////////
	define('URI', $uri);
	/////////////////////////////////////////////////
	$directory;
	
	walk_dir(ROOT);

	define('DIRECTORY', serialize( $directory ) );

	new son_router;