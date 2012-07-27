//	Tasks	::

//	Add thread
//	Edit Thread
//	delete thread

//	Add message
//	Edit message
//	Delete message


	var threads = [{
		thread_id		:	1,
		thread_name		: 'hey there',
		user_name		: 'Sam',
		thread_msg		: 'hello world!'
	}, {
		thread_id		:	2,
		thread_name		: 'thread no two',
		user_name		: 'Sam',
		thread_msg		: 'hi there'
	}];
	
	
	var messages = [{
		thread_id		:	1,
		thread_name		: 'hey there',
		user_name		: 'Sam',
		thread_msg		: 'hello world!'
	}, {
		thread_id		:	1,
		thread_name		: 'hi msgs 2',
		user_name		: 'Sam',
		thread_msg		: 'hello there!'
	}]




/////////////////////////////////////////////////////////////////////////////////////////
//			MODEL API




var $model = function ()
{
	if( arguments.length )
	{
		if( typeof arguments[0] === 'string' )	$app( 'model', arguments );
		return $model;
	}
	else	
	{
		debug == true ? console.log( 'no arguments added to view' ) : false;
		$v.current['model'] = undefined;
		return false;
	}
}








