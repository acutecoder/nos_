<?php

class http
{

	public static function URI()
	{
		$full_page = HOMEPAGE;
		//if( isset( $_GET[URI] ) && $_GET[URI] != "" ) 
		if( !empty($_GET[URI]) )
		{
			echo $_GET[URI];
			$full_page = $_GET[URI];
		}
		return $full_page;
	}

	public static function get($what)
	{
		//if( isset( $_GET[$what] ) )  return $_GET[$what] 
		//return;

		$return;
		$return = isset( $_GET[$what] ) &&  $_GET[$what];
		return $return;
	}

}



