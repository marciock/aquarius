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


		foreach ($script as $key  => $value) {
			
			
				$this->append($key,$value);
			
		}

		//return $this->getAttributes();

		return $this;
	}

	
/*
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