<?php
	class a_base
	{
		public function removeSub( $str )
		{
			if ( strpos( $str, '/' ) !== false )
			{
			    return end( explode ( '/', $str ) );
			}
			else 
			{
				return $str;
			}
		}
		
		public function countdim( $array )
		{
		    if ( is_array( reset( $array ) ) )
		    {
		        $return = $this->countdim( reset( $array ) ) + 1;
		    }
		
		    else
		    {
		        $return = 1;
		    }
		
		    return $return;
		}
		
		protected function extract_assoc( $array )
		{
			$return_array = array();
			foreach( $array as $key => $value )
			{
				if( !is_int( $key ) )
				{
					$return_array[$key] = $value;
					#echo $key . " :: " . $value . "<br />";	//	DeBug Output
				}
			}
			return $return_array;
		}

		protected function slash_path( $path ) 
		{
			return end(explode('\//', $path));
		}
		
		
	}
	
	
