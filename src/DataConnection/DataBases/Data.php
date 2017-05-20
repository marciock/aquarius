<?php

namespace Lib\DataConnection\DataBases;

/**
* 
*/

use Lib\DataConnection\DataSource;
abstract class Data
{
	private $content;
	//private $attributes=[];

	public function get(DataSource $attributes = null){
		
		

		
		return $this->connect();
	}

	

	
	

	abstract protected function connect();

}