<?php


namespace Lib\Markup;
use Lib\Markup\Builder;
class Html
{
	public  function builder($method, $params){

		$tag=(new Builder)
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