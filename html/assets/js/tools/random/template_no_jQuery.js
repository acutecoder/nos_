//////////////////////////////////////////////////////////////////////////////
/*****************************************************************************
*	Sets Template - data must be in JSON format
*****************************************************************************/
//////////////////////////////////////////////////////////////////////////////
	function template ( template, display, data )
	{	
		this.init = function ()
		{
			var original_template;
			var display_holder;
			
			if( window.jQuery )	original_template	= $( template ).html();		// Get template - jQuery
			else if( !window.jQuery )	original_template = document.querySelector( template ).innerHTML;	// use regular JavaScript								
			                                              
			var template_html = original_template;	// temporary template html
	
			if( window.jQuery )	display_holder	= $( display );		// Get Display holder - jQuery
			else if( !window.jQuery )	display_holder = document.querySelector( display );	// use regular JavaScript
			
			
		    var reg;
		    
		    /////////////////////////////////	Function to swap values with key
		    this.swap = function( key, val )
		    {
		    	reg = RegExp( '{{' + key + '}}' );
				return template_html.replace( reg, val );	// Change Current Template Construction
		    }
		   
		    if( data )
		    {
		    	////	Initialise Variables
			    var return_html 	= '';	
			    var i 				= -1;
			    var len 			= data.length;
			    
			    if( len )	//	 If array
			    { 
			    	while( ++i < len )	//	Loop through array
					{
			    		for( var j in data[i] )	//	Loop through Json
			    		{
			    			template_html = this.swap( j, data[i][j] );		// Swap Key and Value and updating instance of template
			    		}
			    		return_html += template_html;		// Append to return HTML
			    		template_html = original_template;	//	Revert temporary template to original
					}
			    }
			    else
			    {
			    	for( var j in data )	//	Loop Through Json
		    		{ 
			    		template_html = this.swap( j, data[j] );	// swap Key and Value updating instance of template	
		    		}
		    		return_html += template_html;	// Append to return HTML
			    }
		    }
		    else	return_html = template_html;
		    
		    if( window.jQuery )	display_holder.html( return_html );		// If jQuery use jQuery to change HTML
		    else		display_holder.innerHTML = return_html;	// Else use regular JavaScript
		}
		
		if( template )
		{
			this.init();
		}
	}
	
	