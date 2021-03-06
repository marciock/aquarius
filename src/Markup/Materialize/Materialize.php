<?php



namespace Lib\Markup\Materialize;
use Lib\Markup\Materialize\BuilderComponents;
class Materialize
{
	public  function builder($method, $params){

		$tag=(new BuilderComponents)
		->params($params)
		->call($method);

		return $tag;
	}

	public function __call($method,$params){
		return $this->builder($method,$params);
	}
/*
	public static function _callStatic($method, $params){

		return self::builder($method,$params);
	}*/
}