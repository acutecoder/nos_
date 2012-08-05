<?php

	class db {

		protected $TYPE		=	'mysql';
		protected $HOST 	=	'localhost';
		protected $DB_NAME 	=	'test';

		protected $UID		=	'sam';
		protected $PWD		=	'sam';



		protected $PDO;

		public function __construct () {
			$this->PDO =  new PDO( $this->TYPE  . ':host=' . $HOST . ';dbname=' . $DB_NAME, $UID, $PWD );
		}






	}