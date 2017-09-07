<?php 

namespace App\Controller;
use SON\Controller\Action;
use SON\DI\Container;
session_start();
/**
* 
*/
class Contato extends Action
{
	public function contato()
	{
		$contato = Container::getClass("contato");
		if (isset($_SESSION['id_user'])) {
			$contatos = $contato->contatoFetchAll($_SESSION['id_user']);
			$this->view->contatos = $contatos;
		}
		
		$this->render('contato');
	}

	public function novo()
	{
		if (isset($_POST['name']) && strlen($_POST['name'])>5) {
			$nome = $_POST['name'];
			$celular = $_POST['celular'];
			$endereco = $_POST['endereco'];
			$email = $_POST['email'];

			$contato = Container::getClass("contato");
			$contato->contatoSave($nome, $celular, $endereco, $email, $_SESSION['id_user']);
			$this->render('novo');
		}
		else{
			$this->render('novo');
		}

		
	}
}