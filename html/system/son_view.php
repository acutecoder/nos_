<?php
    class son_view
    {
		
    	public function __construct( $path = null,  $data = null )
		{
			if( !is_null( $path ) )
			{
				$this->view( $path, $data );
			}
		}
		
		/////////////////////////////////////////	load_up		::		function loads view
		public function view( $path, $data = null )
		{
			if( $this->check_url( $path ) != "log" )
			{
				$flash_menu = $this->flash_menu();
			}
			require_once( $path );
		}
		
		////////////////////////////////////////	Check URL	::
		protected function check_url( $path )
		{
			$temp = explode( "/", $path );
			return $temp[0];
		}
		
		///////////////////////////////////////		Template HTML	::
		protected function flash_menu()
		{
			$url = 'assets/menu' . EXT;
			require_once( $url );
			$menu = new menu();
			return $menu->menu();
		}
		
    }