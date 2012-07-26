<?php
    class son_controller extends son_base
    {
		protected $notLogged = false;
		protected $VIEW;
		protected $MODEL;

		protected $data;

		public function __construct() 
		{
			$VIEW = array();
			$MODEL = array();
		}
		
		////////////////////////////////////////////////////	This function loads the Model
		public function model( $name, $data = null )
		{
			$this->MODEL[$name] =  !empty( $data ) ? new $name( $data ) : new $name;
		}
		
		/////////////////////////////////////////////////////	This function loads the view
		public function view( $name, $data = null )
		{
			$this->VIEW[$name] = new son_view( $url, $data );
		}
		
		
		public function call( $name, $method, $data = null )
		{
			return $this->MODEL[$name]->call( $method, $data );
		}
		

		
		########	INHERITED FUNCTIONS
		
		#	public function removeSub( $str )	--	son_base
		
		
    }	// End Class
    
//	::	system / son_controller.php




