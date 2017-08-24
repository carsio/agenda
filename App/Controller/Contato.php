<?php 

namespace App\Controller;
use SON\Controller\Action;
use SON\DI\Container;

/**
* 
*/
class Contato extends Action
{
	public function contato()
	{
		$contato = Container::getClass("contato");

		$contatos = $contato->contatoFetchAll();

		$this->view->contatos = $contatos;
		$this->render('contato');
	}

	public function novo()
	{
		if ($_POST) {
			$nome = Container::getClass("contato");
			$this->view->contato =
			$this->render('novo');
		}
		else{
			$this->render('novo');
		}

		
	}
}