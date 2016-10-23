<?php
namespace Lib\Markup\Materialize;

/**
* 
*/

use Lib\Markup\Materialize\Components;
use Lib\Markup\Html;
class NAvbar extends Components
{
	
	

	protected function create():string{

			$html=new Html();
			$sources=$this->sources;


			$div .=$html->A($sources['logo'],['href'=>'#','class'=>'brand-logo']);
			$div .=$html->Ul($li,['id'=>'nav-mobile','class'=>'right hide-on-med-and-down']);

			$navbar .= "";


			
		





		return "<div {$attributes}>{$content}</div>";
	}
}