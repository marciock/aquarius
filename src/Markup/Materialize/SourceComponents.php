<?php

namespace Lib\Markup\Materialize;

/**
* 
*/
class SourceComponents extends \ArrayObject
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

}