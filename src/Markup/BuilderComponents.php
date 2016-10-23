<?php



namespace Lib\Markup;

/**
* 
*/

use Lib\Markup\Source;
class BuilderComponents 
{

	private $params;
	public function params(array $params){

		$this->params[]=($params[0]) ?? null;
		unset($params[0]);

		$this->params[]=new Source($params);
		return $this;

	}
	
	public function call($method){

		$class="Lib\Markup\Tags\\".ucfirst($method);
		


		return call_user_func_array([new $class,'get'],$this->params);
	}
	
}