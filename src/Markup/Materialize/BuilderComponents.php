<?php



namespace Lib\Markup\Materialize;

/**
* 
*/

use Lib\Markup\Materialize\SourceComponents;
class BuilderComponents 
{

	private $params;
	public function params(array $params){

		$this->params[]=($params[0]) ?? null;
		unset($params[0]);

		$this->params[]=new SourceComponents($params);
		return $this;

	}
	
	public function call($method){

		$class="Lib\Markup\Materialize\\".ucfirst($method);
		


		return call_user_func_array([new $class,'get'],$this->params);
	}
	
}