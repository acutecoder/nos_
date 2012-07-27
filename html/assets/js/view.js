/*
 * 
 * TODO :: BELOW
 * 
 */

var debug = true;



//////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////
/////////////												VIEW API


var $view = function ()
{
	if( arguments.length )
	{
		//for( var i in arguments )	console.log( i + ' :: ' + arguments[i] );
		if( typeof arguments[0] === 'string' )	$app( 'view', arguments );
		return $view;
	}
	else	
	{
		debug == true ? console.log( 'no arguments added to view' ) : false;
		$v.current['view'] = undefined;
		return false;
	}
}




$view.getName = function(){
	console.log(  $v.current_view_name );
}



$view.fn = function(){
	$v.type = 'view';
	$app._call.apply( this, arguments );
}


$view.on = function (){
	$app.onOff( true );
}

$view.off = function (){
	$app.onOff( false );
}


