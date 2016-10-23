<?php


namespace Lib\StyleScripts;

/**
* 
*/

use Lib\StyleScripts\Config;

class Styles extends Config
{
	
	private $code;

	protected function create():string{

		foreach ($this->source as $value) {
			
			$this->code .="<Link type=\"text/css\" rel=\"stylesheet\" href=\"{$value}\">";
		}
			

		return $this->code;
	}

	protected function show(){
		echo $this->create();
	}
}