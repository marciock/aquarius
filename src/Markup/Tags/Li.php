<?php
namespace Lib\Markup\Tags;

/**
* 
*/

use Lib\Markup\Tags\Tag;
class Li extends Tag
{
	
	protected function validate(){
		


	}

	protected function create():string{

			$content=$this->content;
			$attributes=$this->attributes;
		//$href=$this->attributes->offsetGet(0);
		//$this->attributes->offsetUnset(0);

			//return $attributes;

		return "<li {$attributes}>{$content}</li>";
	}
}