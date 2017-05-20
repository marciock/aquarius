<?php

namespace Lib\ServiceManager;

/**
* 
*/

use Lib\ServiceManager\Services;
class ServiceBuilder 
{

	private $params;
	private $way;
	
	public function params(array $params){

	//	$this->params[]=($params[0]) ?? null;
	//	unset($params[0]);
		
		$this->params[]=new Services($params);
		
		
		return $this;

	}

	public function url($url){

		$way=$url;

		return $way;

	}

	public function call($method){

		$caminho=$this->url($url);
		//$url=$this->url();
		//$class="Lib\Markup\Tags\\".ucfirst($method);
		$class=$caminho."\\".$method;
		

		return $class;
		//return call_user_func_array([new $class,'get'],$this->params);
	}
	
}