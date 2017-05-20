<?php
namespace Lib\Markup\Materialize;

/**
* 
*/

use Lib\Markup\Materialize\Components;

class CardReveal extends Components
{

	private $cardtitle;
	private $title;
	private $link;
	private $id;
	private $text;
	private $image;
	
	protected function validate(){


			//$attr=[];
		foreach ($this->sources as $key => $value) {
			
			if($key==="id"){

				$this->id="id=\"{$value}\"";
			}
			
			if($key==="link"){

					$this->link="<a href=\"{$value}\">{$key}</a>";		
			}

			if($key==="text"){

					$this->text=$value;		
			}

			if($key==="cardtitle"){

					$this->cardtitle=$value;		
			}

			if($key==="title"){

					$this->title=$value;		
			}

			if($key==="image"){

					$this->image=$value;		
			}
			
		}

		


	}

	protected function create():string{

			
		return "<div class=\"card \" {$this->id}>
				    <div class=\"card-image waves-effect waves-block waves-light \">
				      <img class=\"activator\" src=\"{$this->image}\">
				    </div>
				    <div class=\"card-content\">
				      <span class=\"card-title activator grey-text text-darken-4\">{$this->title}<i class=\"material-icons right\">more_vert</i></span>
				      <p>{$this->link}</p>
				    </div>
				    <div class=\"card-reveal\">
				      <span class=\"card-title grey-text text-darken-4\">{$this->cardtitle}<i class=\"material-icons right\">close</i></span>
				      <p>{$this->text}</p>
				    </div>
			  </div>";

			
	}



}