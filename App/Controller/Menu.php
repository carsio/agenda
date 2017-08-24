<?php 

namespace App\Controller;
use SON\Controller\Action;

/**
* 
*/
class Menu extends Action
{
	public function menu()
	{
		$this->render('menu');
	}
}