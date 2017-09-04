<?php 

namespace App\Controller;

use SON\Controller\Action;
// use App\Model\Artigo;
use SON\DI\Container;

class Registrar extends Action
{
	public function registrar()
	{
		$this->render('registrar');
	}

	public function registrarUser()
	{	
		
		if (!$_POST) {
			header("location: https://". $_SERVER['SERVER_NAME'].'/registrar');
		}
		else{
			$nome = $_POST['name'];

			$email = $_POST['email'];
			$confirmEmail = $_POST['emailConfirm'];

			$pass = md5($_POST['pass']);
			$confirmPass = md5($_POST['passConfirm']);

			$nascimento = $_POST['nascimento'];
			
			if ($email != $confirmEmail || $pass != $confirmPass) {
				header("location: https://". $_SERVER['SERVER_NAME'].'/registrar');
			}
			else{
				$user = Container::getClass('user');
				$user->registrar($nome, $email, $pass, $nascimento);
				header("location: https://". $_SERVER['SERVER_NAME'].'/entrar');			
			}
		}

		
	}
}