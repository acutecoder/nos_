<?php 	require_once 'son_boiler_functions.php';	define('URI', $uri);	define('HOMEPAGE', $homepage);
/*
 * FRAMEWORK FOLDERS ARE MAPPED TO CONSTANTS
 * FOR EASE OF USE
 */
//	FOLDER MAPPING ::

 	$system = 'system';

 	$application = 'application';
 		$models =  'models';
 		$views = 'views';
 		$controls = 'controls';


 	$library = 'lib';
 		$security = 'security';	//	Added by default

 		add_packages($library);	//	Adds additional packages

 	$assets = 'assets';	//	Assets folder
 		$css = 'css';
 		$images = 'images';
 		$javascript = 'js';

 	
//	CONSTANTS ::
	

 	define('SYSTEM', $system);

 	define('APP', $application);
 		define('MODELS', bind_path(APP, $models) );
 		define('VIEWS', bind_path(APP, $views) );
 		define('CONTROLS', bind_path(APP, $controls) );


 	define('ASSETS', $assets);
 		define('CSS', bind_path(ASSETS, $css) );
 		define('IMAGES', bind_path(ASSETS, $images) );
 		define('JAVASCRIPT', bind_path(ASSETS, $javascript) );

 	$http = new http();
 	$page = $http->get(HOMEPAGE);
 	
 	new son_loader();
