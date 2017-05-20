<?php



namespace Lib\Markup\Materialize;

/**
* 
*/

//use Lib\Markup\SourceComponents;
abstract class Components
{
	
	public function get(array $sources = null){
		
		//$this->sources=[];

		//$this->content=$content;
		$this->sources=$sources;
		

		$this->validate();
		return $this->create();
	}

	
	abstract protected function validate();
	abstract protected function create():string;

}