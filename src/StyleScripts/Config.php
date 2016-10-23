<?php

namespace Lib\StyleScripts;

/**
* 
*/

//use Lib\StyleScripts\Source;
abstract class Config
{
	//public $source=[];
	public function get(Array $source =null){
			

		foreach ($source as  $value) {
			$this->source=$source;
		}

		
		

		
		return $this->show();
	}

	
	
	abstract protected function create():string;
	abstract protected function show();

}