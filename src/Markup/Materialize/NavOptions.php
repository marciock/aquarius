<?php
namespace Lib\Markup\Materialize;

/**
* 
*/

use Lib\Markup\Materialize\Components;
use Lib\Markup\Html;
class NAvOptions extends Components
{
	
	

	protected function create():string{

			$html=new Html();
			$sources=$this->sources;


			


			
		





		return "<div {$attributes}>{$content}</div>";
	}
}