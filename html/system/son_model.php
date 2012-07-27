<?php
	class son_model extends db_query
	{
		////////////////////////////////////////////////////////	Call Model Method
		public function call( $method, $data = null )		///		Check Exisitence
		{
			if ( is_callable( array( $this, $method ) ) )
			{
				return $this->$method( $data );
			}
			else 
			{
				return FALSE;
			}
		}
		
	}
	
	##	INHERITED METHODS
	//////////////////////
	#	public function query( $sql )
	#	public function quote_smart( $value )
	#	public function quote_smart_array( $array )
	#	public function check_query_type( $string )

//	::	system / son_model.php
