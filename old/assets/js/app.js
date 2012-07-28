/**
 * @author user
 */
var $app = function( type, args ) {
	
	if ( $v.type !== undefined )
	{
		$v.type = type;
		var args_len = args.length;
		
		if( args_len > 0 )
		{
			var that = $app, name = args[0], last_i; 
			
			if( $v.list[type][name] === undefined )	$v.list[type][name] = {};
		
			
			$v.list[type][name]['set'] = true;
			var i = 0;
			while( ++i < args_len )
			{
				if( $v.list[type][name]['fn'] === undefined )
				{
					$v.list[type][name]['fn'] = [];
					last_i = 0;
				}	
				else	last_i = $v.list[type][name]['fn'].length;
				
				$v.list[type][name]['fn'][last_i] = args[i];
			}
			$v.current[type] = name;
		}
	}
}


$app._call = function()	{
	
	if ( $v.type !== undefined )
	{
		var name = $v.current[$v.type];
		for( var i in $v.list[type][name]['fn'] )	$v.list[type][name]['fn'][i].apply( this, arguments );
	}
}

$app.onOff = function( status ){
	
	if ( $v.type !== undefined )
	{
		status = status !== undefined ? status : false;
		var name = $v.current[$v.type];
		if( $v.list[type][name] !== undefined )	$v.list[type][name]['set'] = status;
	}
}



/*
$app.check_view = function ( name ) {
	for( var i in $v.list )	if( i == name )	return true;
	return false;
}
*/


