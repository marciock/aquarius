<?php

namespace Lib\StyleScripts;

/**
* 
*/

use Lib\StyleScripts\Source;
class Builder 
{

	private $params;
	public function params(array $params){

		$this->params[]=($params[0]) ?? null;
		unset($params[0]);

		$this->params[]=new Source($params);
		return $this;

	}
	
	public function call($method){

		$class="Lib\StyleScripts\\".ucfirst($method);
		


		return call_user_func_array([new $class,'get'],$this->params);
	}
	
}