<?php
    class son_controller extends son_base
    {
		protected $notLogged = false;
		protected $VIEW;
		protected $MODEL;

		protected $data;
		
		////////////////////////////////////////////////////	This function loads the Model
		public function model( $name, $data = null )
		{
			$url = MODEL . $name . EXT;
			
			if ( file_exists( $url ) ) 
			{
				require_once( $url );
				
				$name  = $this->removeSub( $name );
				if( !empty( $data ) ) 	$this->MODEL = new $name( $data );
				else 					$this->MODEL = new $name( );
			}
		}
		
		/////////////////////////////////////////////////////	This function loads the view
		public function view( $name, $data = null )
		{
			$url = VIEW . $name . EXT;
			
			if ( file_exists( $url ) ) 
			{	
				new son_view( $url, $data );
			}
		}
		
		
		public function call( $method, $data = null )
		{
			return $this->MODEL->call( $method, $data );
			echo $data;
		}
		

		
		########	INHERITED FUNCTIONS
		
		#	public function removeSub( $str )	--	son_base
		
		
    }	// End Class
    
//	::	system / son_controller.php




