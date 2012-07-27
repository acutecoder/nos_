<?php
	class db_query extends db
	{
		public function query( $sql, $associate_array = false )
		{
			$this->db_handle	= mysql_connect( $this->server, $this->user_name, $this->pass_word );
			$this->db_found		= mysql_select_db( $this->database, $this->db_handle );
			
			
			if( $this->db_found )
			{
				$result = mysql_query( $sql );
				
				$type = $this->check_query_type( $sql );
				
				if( $type == "select" || $type == "call" )
				{
					if( isset( $result ) )
					{
						if( !empty( $result ) )
						{
							$num_rows = mysql_num_rows( $result );
							
							if( $num_rows > 1 )
							{
								for( $i = 0; $i < $num_rows; $i++ )
								{
									$array[] =  mysql_fetch_array( $result );
								}
							}
							else
							{
								$array =  mysql_fetch_array( $result );
							}
						}
					}
					
					mysql_close( $this->db_handle );
					
					if ( !empty( $array ) )
					{
						if( count( $array ) > 0 )
						{
							$dimesions = $this->countdim( $array );

							if( $dimesions > 1 )
							{
								if( $associate_array )
								{
									return $this->swap_multi( $array );
								}
								else if( !$associate_array )
								{
									return $array;
								}
							}
							else
							{
								/*
								if( count( $array ) == 2 )
								{
									return $array[0];
								}	
								else 
								{*/
									return $array;
								#}
								
							}
						}
					}
				}
				else 
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		
		public function quote_smart( $value ) 
		{
			$this->db_handle	= mysql_connect( $this->server, $this->user_name, $this->pass_word );
			$this->db_found		= mysql_select_db( $this->database, $this->db_handle );
			if ( get_magic_quotes_gpc() ) 
			{
				$value = stripslashes( $value, $this->db_handle );
			}
		
			if ( !is_numeric( $value ) ) 
			{
				$value = "'" . mysql_real_escape_string( $value, $this->db_handle ) . "'";
			}
			return $value;
		}
	
		
		public function quote_smart_array( $array )
		{
			if( count( $array ) > 0 )
			{
				if( is_array( $array ) )
				{
					for( $i = 0; $i < count( $array ); $i++ )
					{
						$smart_array[] = $this->quote_smart( $array[$i] );
					}
					return $smart_array;
				}
				return $this->quote_smart( $array );
			}
		}
		
		public function escape( $value )
		{
			$this->db_handle	= mysql_connect( $this->server, $this->user_name, $this->pass_word );
			$this->db_found		= mysql_select_db( $this->database, $this->db_handle );
			if ( get_magic_quotes_gpc() ) 
			{
				$value = stripslashes( $value, $this->db_handle );
			}
		
			if ( !is_numeric( $value ) ) 
			{
				$value = mysql_real_escape_string( $value, $this->db_handle );
			}
			return $value;
		}
		
		public function check_query_type( $string )
		{
			$query_type = array(
							0 => "insert",
							1 => "update",
							2 => "select",
							3 => "call"
							);
						
			$string = strtolower( $string );
	
			for( $i = 0; $i < count( $query_type ); $i++ )
			{
				$pos = strpos( $string, $query_type[$i] );
				
				if( $pos !== false ) 
				{
					return $query_type[$i];
				}
			}
		}
		
		protected function swap_multi( $array )
		{
			$return_array = array();
			
			$total = count( $array );
			
			if ( $total > 0 )
			{
				for ( $i = 0; $i < $total; $i++ )
				{
					if( count( $array[0] ) > 0 )
					{
						foreach ( $array[0] as $key => $value )
						{
							$return_array[$key][] = $array[$i][$key];
						}
					}
				}
				return $return_array;
			}
		/*	foreach ( $return_array as $key => $value )
			{
				$t = count( $return_array[$key] );
				
				for( $j = 0; $j < $t; $j++ )
				{
					echo $return_array[$key][$j] . "<br / >";
				}
			}	*/
		
		}
		
		
	/*	
		protected function countdim( $array )
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
		*/
		
	}
	
	########	INHERITED FUNCTIONS
	
	#	public function removeSub( $str )
	
	
	//	system / db_query.php