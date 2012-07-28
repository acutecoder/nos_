<?PHP
 	session_start();
/*
 * @ Default Home Page
 */
 	$homepage = 'home';
/////////////////////////////////////////////////	HOME PAGE

/////////////////////////////////////////////////	Login Headers
 	$success = "Location: index.php?!=home";
	$failure = "Location: index.php?!=login/signup&status=failure";
 	
	define( 'SUCCESS', $success );
	define( 'FAILURE', $failure );
	
/*
 * Display Errors
 */
	ini_set('display_errors', 1);
/////////////////////////////////////////////////	ERRORS


/*
 * Route to Applications Folder
 */
	$applications 	= "application/";
		$model 		= "model/";
		$view 		= "view/";
			
		$controller = "controller/";
/////////////////////////////////////////////////	APPLICATION FOLDER

/*
 * Route to system Folder
 */
	$system = "system/";
		$config = "config/";
/////////////////////////////////////////////////	SYSTEM FOLDER

	$lib = "lib/";
		$security = "security/";
		
	//$fixtures = "fixtures/";
	
	$gateway = "gateway/";
		
/*	
 * 
 * @ Base Class
 * @ Loader
 * @ Director
 * @ Controller
 */

	$SON_BASE				= "son_base";
	$SON_LOADER				= "son_loader";
	$SON_CONTROLLER 		= "son_controller";
	$SON_MODEL				= "son_model";
	$SON_VIEW				= "son_view";
///////	
	$http_requests 	= "http_requests";
	$auth_cont		= "auth_controller";
	$db				= "db";
	$db_query		= 'db_query';
	
/////////////////////////////////////////	Define Constants
	define('EXT', ".php" );

//**////////////////////////////////////	Applications
	define( 'APPS', $applications );
	
	///////////////////////	DIR
		define( 'MODEL', APPS . $model );
		define( 'VIEW', APPS . $view );
		define( 'CONTROLLER', APPS . $controller);
		
//**////////////////////////////////////	System	
	define( 'SYSTEM', $system );
		define( 'HTTP_REQ', $http_requests );
		define( 'DB', $db );
		define( 'DB_QUERY', $db_query );
	///////////////////////	DIR
		define( 'CONFIG', $config );

//**////////////////////////////////////	Lib	
	define( 'LIB', $lib );
		define( 'SECURITY', LIB . $security );
	
	#define( 'FIXTURE', $f );
	
	define( 'GATEWAY', $gateway );	
	
	///////////////////////	CLASSES
	define( 'SON_BASE', $SON_BASE );	
		define( 'SON_LOADER', $SON_LOADER );
		define( 'SON_CONTROLLER', $SON_CONTROLLER );
		define( 'SON_MODEL', $SON_MODEL );
		define( 'SON_VIEW', $SON_VIEW );
		

//////////////////////////////
	define( 'AUTH_CONTROLLER', $auth_cont );	
	
/*
 * 	SYSTEM CLASSES
 */
	
	/*foreach ( glob ( SYSTEM . "*" . EXT ) as $filename )
	{
		$temp = explode( "/", $filename );
		if( $temp[1] != ( "index" . EXT ) )	require_once( $filename );
	}*/
	
	
	require_once( SYSTEM . SON_BASE . EXT );
	require_once( SYSTEM . DB . EXT );
	require_once( SYSTEM . DB_QUERY . EXT );
	
	#require_once( GATEWAY . DB . EXT );
	#require_once( GATEWAY . DB_QUERY . EXT );
	
/*********************************************
 * 	HTTP-REQUESTS
 ********************************************/

 	require_once( SYSTEM . HTTP_REQ . EXT );
 	
	$http_req = new http_requests();
	$page = $http_req->get( $homepage );

//**////////////////////////////////////	Page Constant
	define( 'PAGE', $page );	
/*********************************************
 * GO!!!!***
 ********************************************/
	
	require_once( SYSTEM . SON_LOADER . EXT );
	require_once( SYSTEM . SON_CONTROLLER . EXT );
	require_once( SYSTEM . SON_MODEL . EXT );
	require_once( SYSTEM . SON_VIEW . EXT );
/////////////////////////////////////////////////////
	require_once( SYSTEM . AUTH_CONTROLLER .EXT );
	
	
	
	new son_loader();
	
//::	index.php

