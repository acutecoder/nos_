	function Son_Addon (){}
	
	Son_Addon.prototype.get_event = function( what )
	{
		var return_ob;
		var e = window.event;
		
		if ( e.target !== undefined )	return_ob = e.target;
		else if ( e.srcElement !== undefined )	return_ob = e.srcElement;
		
		if ( return_ob.nodeType == 3 )	return_ob = return_ob.parentNode;
		
		if( what )	return_ob = return_ob[what];

		return return_ob;
	}
	
	
	
	Son_Addon.prototype.has_event = function( obj, what )
	{
		for( var i in obj.data('events') )
		{
			if( what !== undefined ) 
			{
			  if( i == what )	return true;
			}
			else return true;
		}
		return false;
	}
	
//////////////////////////////////////////////////////////////////////////////
/*****************************************************************************
*	Counts Attributes of a Json
*****************************************************************************/
//////////////////////////////////////////////////////////////////////////////
	Son_Addon.prototype.json_length = function ( json )
	{
		var len = 0;
		for( var i in json ) len++;
		return len;
	}
	
//////////////////////////////////////////////////////////////////////////////
/*****************************************************************************
*	gets JSON index of item
*****************************************************************************/
//////////////////////////////////////////////////////////////////////////////
	Son_Addon.prototype.json_index = function ( item, In )
	{
		var array = [];
		for( var i in In )
		{
			if ( item == In )	array[array.length] = i;
		}
		
		if ( array.length == 1 ) return array[0];
		else if ( array.length > 1 ) return array;
		else if ( !array.length ) return;
	}
	


	window.SoN = new Son_Addon();
	

	
	