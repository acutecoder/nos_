<?php

class logged
{
/*
 * @ Default Auth Code
 */
	protected $auth_code = 'u';
	
/*
 * @ Log In URL
 */
	protected $sub = "log/";
	protected $log_mod = "login_model";
	protected $log_view = "login_view";
	
	public function  __construct()
	{
		if( isset( $_SESSION['auth_code']) )
		{
			$this->auth_code = $_SESSION['auth_code'];
		}
	}
	
	public function login_model()
	{
		return $this->sub . $this->log_mod;
	}
	
	public function login_view()
	{
		return $this->sub . $this->log_view;
	}
	
	
	public function is_logged()
	{
		if( $this->auth_code == "a" || $this->auth_code == "s" )
		{
			return true;
		}
		else
		{
			return false;
		}
		
		/*if(isset($_SESSION['name'])){
			$screen =  $_SESSION['name'];
		}else{
			$screen = "Unknown";
		}
		
		if(isset($_SESSION['id'])){
			$userID =  $_SESSION['id'];
		}else{
			$userID = "Unknown";
		}*/
	}
}
			
			
			///echo $screen;
