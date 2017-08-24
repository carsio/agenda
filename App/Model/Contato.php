<?php 

namespace App\Model;
use PDO;

class Contato{

	protected $db;

	public function __construct(PDO $db)
	{
		$this->db = $db;

		
	}

	public function contatoFetchAll()
	{
		$query = "SELECT * FROM CONTATOS";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		$fetch = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();

		return $result; 
	}

	public function contatoSave()
	{
		$query = "INSERT INTO CONTATOS
		(id, nome, celular, endereco, email)
		VALUES
		(DEFAULT, '');
		";

	}

}