<?php



namespace Lib\Markup\Materialize;

/**
* 
*/

use Lib\Markup\Source;
abstract class Components
{
	
	public function get(Source $sources = null){
		
		

		//$this->content=$content;
		$this->sources=$sources;
		

		
		return $this->create();
	}

	
	
	abstract protected function create():string;

}