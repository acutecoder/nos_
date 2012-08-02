<?php
    abstract class a_control {

		protected $VIEW;
		protected $MODEL;


		public function model( $name, $data = null ) {

			if( empty( $this->MODEL ) ) $this->MODEL = array();
			$this->MODEL[$name] = new $name( $data );
			return $this->MODEL[$name];
		}


		public function view( $name, $data = null ) {

			if( empty( $this->VIEW ) ) $this->VIEW = array();
			$this->VIEW[$name] = new  a_view( $name, $data );
			return $this->VIEW[$name];
		}

    }
	// END	::	system / a_control.php