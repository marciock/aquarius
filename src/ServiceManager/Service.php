<?php

namespace Lib\ServiceManager;

/**
* 
*/

use Lib\ServiceManager\Sources;
abstract class Controller
{
	private $content;
	//private $attributes=[];

	public function get(Sources $attributes = null){
		
		

		
		return $this->create();
	}

	

	
	

	abstract protected function create():string;

}