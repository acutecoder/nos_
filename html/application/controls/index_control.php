<?php

	class index_control extends a_control {
	
		public function __construct() {
			
			$message_one = $this->model('index_model')->hi();
			$message_two = test_model::hmm();

			$data = array( $message_one, $message_two );

			$view = $this->view('index_view', $data);
		}
	}