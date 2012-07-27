<?php
/*
 * Created on Apr 26, 2012
 *
 */
 
 	class ajax_control extends son_control
 	{
 		protected $ajax_output;
 		
 		public function __construct( $folder, $class, $function, $view = null, $data = null )
 		{
 			$this->model( $folder . "/" . $class );
 			$this->ajax_output = $this->call( $function, $data );
 			
 			if( is_null( $view ) )
 			{
 				$this->ajax_view( $this->ajax_output );
 			}
 			else
 			{
 				$this->view( $folder . '/' . $view, $this->ajax_output );
 			}
 		}
 		
 		protected function append_output( $str )
 		{
 			$this->ajax_output .= $str;
 		}
 		
 		
 		protected function clear_output()
 		{
 			$this->ajax_output = "";
 		}
 		
 		protected function ajax_view( $str = null )
 		{
 			if ( !is_null( $str ) )
 			{
 				echo $str;
 			}
 			else
 			{
 				echo $this->ajax_output;
 			}
 		}	
 		
 	}	//	::	END CLASS

