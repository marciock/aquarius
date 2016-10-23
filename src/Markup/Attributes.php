<?php

namespace Lib\Markup;

/**
* 
*/
class Attributes extends \ArrayObject
{
	//private $attributes=[];
	
	public function __construct(Array $input)
	{
		foreach ($input as  $key => $value) {
			
			if(is_array($value)){

					$this->setValue($value);
			}else{
				$this->offsetSet($key,$value);
			}
		}
	}

	protected function setValue(Array $attributes){

		foreach ($attributes as $key => $value) {
			
			$this->offsetSet($key,$value);
		}

		return $this;
	}

	protected function getAttributes(){

		$attr=[];

		foreach ($this->getArrayCopy() as $key => $value) {
			
			if(is_int($key)){
				$attr[]=$value;
			}else{

				$attr[]="{$key}=\"{$value}\"";
			}
	

		
		}
		return ' '.implode(" ",$attr);
	}

	public function __toString(){

		if(strlen($this->getAttributes())>1){
			return $this->getAttributes();
		}

		return ' ';
	}


}