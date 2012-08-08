<?php

	class db {

		protected $TYPE		=	'mysql';
		protected $HOST 	=	'localhost';
		protected $DB_NAME 	=	'test';

		protected $UID		=	'sam';
		protected $PWD		=	'sam';

		protected $CONN;

		protected $DATA;

		protected $QUERY 	= '';


		protected $Q_PLACEHOLDERS;


		public function __construct() {}


		public function query( $sql, $params = null ) {

			try {
				return $this->q( $sql, $params );
			}
			catch( PDOException $e ) {
				echo $e;
				return;
			}
		}

		protected function q( $sql, $params = null ) {

			$con_str = $this->TYPE . ':host=' . $this->HOST . ';dbname=' . $this->DB_NAME;

			$this->CONN = new PDO( $con_str, $this->UID, $this->PWD );
			$this->CONN = $this->CONN->prepare( $sql );
			$this->CONN->execute( $params );
			$this->DATA = $this->CONN->fetchAll( PDO::FETCH_ASSOC );
			return $this->DATA;
		}

		public function dirQuery( $sql ) {
			$this->CONN = new PDO( $this->TYPE . ':host=' . $this->HOST . ';dbname=' . $this->DB_NAME, $this->UID, $this->PWD );
			$this->query( $sql );
		}



		//public function _

//////////	QUERY BUILD

		public function _q() {

			$this->QUERY = '';
			$Q_PLACEHOLDERS = array();
		}

		public function insert_into() {

		}

		public function values() {

		}


		public function select( $params ) {

			$this->QUERY = 'SELECT ';

			$no_args = func_num_args();


			if( $no_args == 0 ) :

				$this->QUERY .= '* ';
			
			else if( $no_args == 1 ) :

				if( is_array( $params ) ) :

					foreach( $params as $what ) :

						$this->QUERY .= 

					endif;

				elseif( is_string( $params ) :
					
					$this->QUERY

				endif;

		}

		public function from() {

		}

		public function where() {

		}

		public function update() {

		}

		public function exe() {

		}

	}