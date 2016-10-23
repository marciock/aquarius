<?php

namespace Lib\Markup\Tags;

/**
* 
*/

use Lib\Markup\Attributes;
abstract class Tag
{
	
	public function get($content ,Attributes $attributes = null){
		
		

		$this->content=$content;
		$this->attributes=$attributes;
		

		$this->validate();
		return $this->create();
	}

	

	

	abstract protected function validate();

	abstract protected function create():string;

}