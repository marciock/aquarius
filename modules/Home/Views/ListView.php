<?php

namespace Modules\Home\Views;

/**
* 
*/



class ListView extends View
{
		

	abstract protected function create(){

		//$controller=new ListController;

		//$list=$controller;

	}

	abstract protected function show(){

		echo $controller;
	}

}