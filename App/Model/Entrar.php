<?php 

namespace App\Model;
use PDO;

/**
* 
*/
class Entrar
{
	private $db;

	function __construct(PDO $conn)
	{
		$this->db = $conn;
	}

	public function logar($userEmail, $pass)
	{
		$query = "SELECT * FROM users WHERE email = '$userEmail' and pass = '$pass'";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		$fetch = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();
		$user = $result[0];

		if (count($result)==1 && $user['email'] == $userEmail && $user['pass'] == $pass) {
			
			
			session_start();
			$_SESSION['id_user'] = $user['id'];
			$_SESSION['nome_user'] = $this->primeiroNome($user['nome']);
			header("location: https://".$_SERVER['SERVER_NAME']."/contato");
		}
		else{
			header("location: https://".$_SERVER['SERVER_NAME']."/entrar");
		}
	}

	private function primeiroNome($str){

		$pNome = $str;

		for($i=0;$i<strlen($str);$i++){
			if($str[$i]==" "){
				$pNome = substr($str,0,$i);
				break;
			}
		}

		return $pNome;
	}

}