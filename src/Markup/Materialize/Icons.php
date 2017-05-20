<?php
namespace Lib\Markup\Materialize;

/**
* 
*/

use Lib\Markup\Materialize\Components;

class Icons extends Components
{

	private $size;
	private $icon;
	private $id;
	
	protected function validate(){


			$attr=[];
		foreach ($this->sources as $key => $value) {
			
			if($key==="id"){

				$this->id="id=\"{$value}\"";
			}
			if($key==="icon"){

				$this->icon=$value;
			}

			if($key==="size"){

					$this->size=$value;		
			}

			
		}

		


	}

	protected function create():string{

			
		return "<i {$this->id} class=\"{$this->size} material-icons\">{$this->icon}</i>";
			
	}



}