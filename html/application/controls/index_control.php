<?php

	class index_control extends a_control {
	
		public function __construct() {
			
			$hi = $this->model('index_model')->hi();
			#$how = index_model::how();
			//$count = array( 1,2,3 ); 

			$data = compact( 'hi' );

			$view = $this->view('index_view', $data)->render( true );
		}
	}
	//	END :: application / controls / index_control.php