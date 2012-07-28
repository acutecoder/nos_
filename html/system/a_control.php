<?php
    abstract class a_control extends a_base
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
			return $this->MODEL[$name];
		}
		
		/////////////////////////////////////////////////////	This function loads the view
		public function view( $name, $data = null )
		{
			$this->VIEW[$name] = new  a_view( $name, $data );
		}
		
		
		public function call( $name, $method, $data = null )
		{
			return $this->MODEL[$name]->call( $method, $data );
		}
		

		
		########	INHERITED FUNCTIONS
		
		#	public function removeSub( $str )	--	son_base
		
		
    }	// End Class
    
//	::	system / son_control.php




