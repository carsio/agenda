<?php 

namespace App\Controller;

use SON\Controller\Action;
// use App\Model\Artigo;
use SON\DI\Container;

class Index extends Action
{

	public function index()
	{
		// $nomes = array();

		// $nomes[] = 'Carsio';
		// $nomes[] = 'Camilo';
		// $nomes[] = 'Mara';

		// $this->view->nomes = $nomes;

		$artigo = Container::getClass("artigo");

		$artigos = $artigo->artigoFetchAll();

		// print_r($artigos);

		// foreach ($artigos as $registros) {
		// 	echo $registros['TITULO'];
		// }

		// foreach ($artigos as $registros) {
		// 		foreach ($registros as $campo => $valor) {
		// 			echo "$campo => $valor</br>";
		// 		}
		// }


		// $this->view->artigos = $artigos;

		$this->render('index');
	// 
	}
	
	public function empresa()
	{
		$this->render('empresa');;
	}
}

