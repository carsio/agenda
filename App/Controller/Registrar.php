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

		// if (!$_GET['msg']) {
		// 	$this->render('registrar');
		// }
		// else{
		// 	$this->view->msg = $_GET['msg'];
		// 	$this->render('resgistrar');
		// }	
	}

	public function registrarUser()
	{	
		
		if (!$_POST) {
			header("location: https://". $_SERVER['SERVER_NAME'].'/registrar');
		}
		else{
			$this->verificarDisp();
		}
	}
	public function verificarDisp()
	{
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
			$isDisp = $user->consultaDips($email);

			if ($isDisp) {
				$user->registrar($nome, $email, $pass, $nascimento);
				session_start();
				$_SESSION['email']=$email;
				header("location: https://". $_SERVER['SERVER_NAME'].'/entrar');
			}
			else{
				echo "Email já registrado";
			}
						
		}
	}

}