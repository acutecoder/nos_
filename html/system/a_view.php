<?php
    class a_view
    {
		
    	public function __construct( $path = null,  $data = null )
		{
			if( !is_null( $path ) )	$this->view( $path, $data );
		}
		
		/////////////////////////////////////////	load_up		::		function loads view
		public function view( $path, $data = null )
		{
			if( $data ) $data;
			$path = VIEWS . '/'.$path.'.php';
			require_once( $path );
		}
    }