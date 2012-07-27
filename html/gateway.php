<?php
	
	ini_set('display_errors', 1);
	
	define( 'EXT', ".php" );
	
    define( 'GATEWAY', "gateway/" );
	define( 'SYSTEM', "system/" );
	
	define( 'APP', "application/" );
	////////////////////////////////
		define( 'CONTROLLER', APP . "controller/" );
		define( 'MODEL', APP . "model/" );
		define( 'VIEW', APP . "view/" );
	////////////////////////////////////////////////////////////////////
	require_once ( SYSTEM . "son_base" . EXT );
	
	#require_once ( GATEWAY . "db" . EXT );					//	TESTING -- REMOVE!
	#require_once ( GATEWAY . "db_query" . EXT );
	
	require_once( SYSTEM . "db" . EXT );
	require_once( SYSTEM . "db_query" . EXT );
	
	require_once( SYSTEM . "http_requests" . EXT );
	
	$http = new http_requests();
	$luckyChar = $http->getLuckyChar();
	
	$sendData = get_vars( $luckyChar );
	
    if( isset( $_GET[$luckyChar] ) )
	{
		$full = $_GET[$luckyChar];
		
		$split = explode( ".", $full );
		
		if( count( $split ) > 0 )
		{
			////////////////////////////
			$folder = $split[0];
			////////////////////////////
			if( count( $split ) > 1 )
			{
				////////////////////////////
				$class = $split[1];
				$class = check( $class, "_model" );
				
				//$path = $folder . "/" . $class;
				////////////////////////////
				if( count( $split ) > 2 )
				{
					$function = $split[2];
					
					if( count( $split ) > 3 )
					{
						$view = $split[3];
						$view = check( $view, "_view" );
					}
					else
					{
						$view = null;
					}
					
					////////////////////////////
					require_once ( SYSTEM . "son_controller" . EXT );
					require_once ( SYSTEM . "son_model" . EXT );
					require_once ( SYSTEM . "son_view" . EXT );
					require_once ( APP . "ajax_controller" . EXT );
				 	
				 	if( count( $sendData ) > 0 )
				 	{
				 		new ajax_controller( $folder, $class, $function, $view, $sendData );
				 	}
				 	else
				 	{
				 		new ajax_controller( $folder, $class, $function, $view );
				 	}
				}
			}
		}
	}	
	
	
	function check( $str, $check )
	{
		$pos = strpos( $str, $check );
		if( empty( $pos ) )
		{
			$str .= $check;
		}
		return $str;
	}
	
	
	function get_vars()
	{
		$num_args = func_num_args();
		
		foreach ( $_GET as $key => $value )
		{
			if ( $num_args > 0 )
			{
				$arg = func_get_args();
				
				for ( $i = 0; $i < $num_args; $i++ )
				{
					if( $key != $arg[$i] )
					{
						$data[$key] = $_GET[$key];
					}
				}
			}
		}
		if ( isset( $data ) )	return $data;
		else					return false;
		
		
	}

	
	