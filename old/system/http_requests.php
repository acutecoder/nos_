<?php

class http_requests extends db_query
{
	/////////////////////////////////////////////////
	protected $luckyChar = '!';
	/////////////////////////////////////////////////
	
	protected $fullPage = "";
	
	
	public function __construct()
	{
		if( isset( $_GET[$this->luckyChar] ) && $_GET[$this->luckyChar] != "" )
		{
			$this->fullPage = $_GET[$this->luckyChar];
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



