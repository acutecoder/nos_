<?PHP
 	session_start();

 	$homepage = '/';

 	$system = 'system';

 	$application = 'application';
 		$model = 'model';
 		$view = 'view';
 		$controller = 'controller';


 	define('SYSTEM', $system);


 	function __autoload( $class_name ) {
 		require SYSTEM . '/' . $class_name . '.php';
 	}

 	new son_loader();