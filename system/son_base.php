<?php
	class son_base
	{

		public function __autoload ( $name ) {
			$dir = unserialize(DIRECTORY);

			if( $dir ) :
				
				foreach( $dir as $folder ) :

						echo '::' . $folder . '<br />';
		                $file = $name . '.php';
		            	$path = $folder . '/' . $file;
		            	
		                /*if( file_exists( $path ) ) :
		                    require_once $path;
		                    return;
		                endif;*/
		        endforeach;
		        //echo '<h1 style="display:block">Class :: ' . $name . ' does not exist</h1>';
		       // require_once '404.html';
			endif;
		}


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
		
		
	}
	
	
