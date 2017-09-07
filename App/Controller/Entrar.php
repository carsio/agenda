<?php 

namespace App\Controller;

use SON\Controller\Action;
// use App\Model\Artigo;
use SON\DI\Container;

class Entrar extends Action
{

	public function logar()
	{

		session_start();

		if (isset($_SESSION['email'])) {
			$this->view->email = $_SESSION['email'];
		}

		session_destroy();

		$this->render('entrar');
	}

	public function autenticar()
	{
		if (isset($_POST['userEmail']) && isset($_POST['userPass'])) {
			$autenticao = Container::getClass('entrar');
			$autenticao->logar($_POST['userEmail'], md5($_POST['userPass']));
		}
		else{
			header("location: https://".$_SERVER['SERVER_NAME']."/entrar");
		}
	}

	public function sair()
	{
		session_start();
		session_destroy();

		header("location: https://".$_SERVER['SERVER_NAME']);
	}
}

