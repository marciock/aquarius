<?php


namespace Lib\Markup\Tags;

/**
* 
*/

use Lib\Markup\Tags\Tag;
class Img extends Tag
{
	
	protected function validate(){
		

		
	}

	protected function create():string{
		
		$attributes=$this->attributes;
		//$content=$this->content;
		//$href=$this->attributes->offsetGet(0);
		//$this->attributes->offsetUnset(0);

		return "<img{$attributes}>";
	}
	
}