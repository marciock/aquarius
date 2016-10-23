<?php

namespace Lib\StyleScripts;

/**
* 
*/
class Source extends \ArrayObject
{
	//private $attributes=[];
	
	public function __construct(Array $script)
	{
		foreach ($script as   $value) {
			
			
				$this->append($value);
			
		}

		return $this->getAttributes();
	}

	

	protected function getAttributes(){

		$attr=[];

		foreach ($this->getArrayCopy() as $value) {
			
			
				$attr[]=$value;
			
		}
		//return implode('',$attr);

		return $attr;
	}

/*
	public function __toString(){

		if(strlen($this->getAttributes())>1){
			return $this->getAttributes();
		}

		return ' ';
	}
*/

}