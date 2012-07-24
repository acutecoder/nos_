<?php

class http extends db_query
{
	/////////////////////////////////////////////////
	protected $fullPage = "";
	
	public function __construct()
	{
		if( isset( $_GET[URI] ) && $_GET[URI] != "" )
		{
			echo $_GET[URI];
			$this->fullPage = $_GET[URI];
			$this->fullPage = $this->escape( $this->fullPage );
		}
	}
	
	public function get( $p )
	{
		if( $this->fullPage == "" )		return $p;
		else  							return $this->fullPage;
	}
	
	public function getLuckyChar(){		return $this->luckyChar;	}
}



