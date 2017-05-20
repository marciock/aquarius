<?php
namespace Lib\Markup\Materialize;

/**
* 
*/

use Lib\Markup\Materialize\Components;

class Navbar extends Components
{
	private $options;
	private $logo;
	private $id;
	private $color;
	
	protected function validate(){


			$attr=[];
		foreach ($this->sources as $key => $value) {
			
			if($key==="id"){

				$this->id="id=\"{$value}\"";
			}

			if($key==="logo"){

				$this->logo=$value;
			}

			if($key==="options"){

					$attr=$value;		
			}

			if($key==="color"){

				$this->color=$value;

			}
		}

		foreach ($attr as $key => $value) {
			$this->options .="<li><a href=\"{$value}\">{$key}</a></li>";
		}


	}

	protected function create():string{

			
		return "<nav  {$this->id} class=\"{$this->color}\">
				    <div class=\"nav-wrapper\" style=\"margin-left: 2em;\">
				      <a href=\"#\" class=\"brand-logo\">{$this->logo}</a>
				      <ul id=\"nav-mobile\" class=\"left hide-on-med-and-down\" style=\"margin-left: 10em;\"> 
				       
				       {$this->options}
				        
				      </ul>
				    </div>
				  </nav>";

			
	}



}