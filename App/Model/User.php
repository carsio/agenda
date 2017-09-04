<?php 

namespace App\Model;
use PDO;



class User
{
	protected $db;

	public function __construct(PDO $db)
	{
		$this->db = $db;
	}

	public function registrar($nome, $email, $pass, $nascimento)
	{
		$query = "INSERT INTO users
		(id, nome, email, pass, nascimento)
		VALUES
		(DEFAULT, '$nome', '$email', '$pass', '$nascimento');
		";

		$stmt = $this->db->prepare($query);
		$stmt->execute();
	}

}