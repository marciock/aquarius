<?php


namespace Lib\StyleScripts;

/**
* 
*/

use Lib\StyleScripts\Config;

class Scripts extends Config
{
	
	private $code;

	protected function create():string{

		foreach ($this->source as $value) {
			
			$this->code .="<script  type=\"text/css\"  src=\"{$value}\"></script>";
		}
			

		return $this->code;
	}

	protected function show(){
		echo $this->create();
	}
}