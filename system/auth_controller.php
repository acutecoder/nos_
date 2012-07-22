<?php

	class auth_controller extends son_controller
	{
		public $logged;
		
		//////////////////////////////////////////////////		MODEL
		public function model( $name, $data = null )
		{
			$this->load_logged();
			
			if( $this->logged->is_logged() )
			{
				parent::model( $name, $data = null );
			}
			else
			{
				parent::model( $this->logged->login_model() );
				parent::view( $this->logged->login_view() );
			}
		}
		
		/////////////////////////////////////////////////		VIEW
		public function view( $name, $data = null )
		{
			$this->load_logged();
			
			if( $this->logged->is_logged() )
			{
				parent::view( $name, $data );
			}
		}
		
		
		public function load_logged()
		{
			if( !isset( $this->logged ) )
			{
				require_once( SECURITY . "logged.php" );	//	Include logged.php
				$this->logged = new logged();				//	Containing the logged class	
			}
		}
		
		public function authorised_page()
		{
			if( $this->logged() )
			{
				return true;
			}
			else 
			{
				$this->view();
			}
		}
		
		public function logged()
		{
			return $this->logged();
		}
		
		
	
				
			
		########	INHERITED FUNCTIONS
		
		#	public function removeSub( $str )	--	son_base
		
		#	public function model( $name, $data = null )	--	son_controller
		#	public function view( $name, $data = null )		--	son_controller
		
		
	}
//::	auth_controller.php






