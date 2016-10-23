<?php


namespace Lib\Markup\Tags;

/**
* 
*/

use Lib\Markup\Tags\Tag;
class A extends Tag
{
	
	protected function validate(){
		if($this->content===null){

			throw new \Exception("That Anchor was request", 1);
		}

		//if($this->attributes->offsetExists(0)){
		//	throw new \Exception("That Link was request", 1);
		//}


	}

	protected function create():string{

			$content=$this->content;
			$attributes=$this->attributes;
		//$href=$this->attributes->offsetGet(0);
		//$this->attributes->offsetUnset(0);

			//return $attributes;

		return "<a {$attributes}>{$content}</a>";
	}
}