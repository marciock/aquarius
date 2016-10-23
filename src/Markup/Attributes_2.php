<?php

namespace Lib\Markup;

/**
* 
*/
class Attributes 
{
	
	private  $attributes=array();
	public function __construct(Array $input)
	{
		
				$this->attributes=$input;
				
			

			

	}
			
		
	

	protected function setValue(Array $attributes){

		//if (is_array($attributes)){

			foreach ($attributes as $key => $value) {
				
				$this->attributes=array($key=>$value);
			}
		
		

		return $this->attributes;
	}

	protected function getAttributes(){

		
		$attr=[];
		foreach ($this->attributes as $key => $value) {
			
			if(is_int($key)){
				$attr[]=$value;
			}else{

				$attr[]=" {$key}=\"{$value}\" ";


			}
	
			//return ' '.$attr;
			
		}

		return ''.implode("",$attr);
		
	}

	

	public function __toString(){

		//if(strlen($this->getAttributes())>0){
			return $this->getAttributes();
		//}

		//return ' ';

		
	}


}