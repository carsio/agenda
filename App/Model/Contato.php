<?php 

namespace App\Model;
use PDO;

class Contato{

	protected $db;

	public function __construct(PDO $db)
	{
		$this->db = $db;

		
	}

	public function contatoFetchAll($id_user)
	{
		$query = "SELECT * FROM contatos WHERE id_user='$id_user'";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		$fetch = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();

		return $result; 
	}

	public function contatoSave($nome, $celular, $endereco, $email, $id_user)
	{
		$query = "INSERT INTO contatos
		(id, nome, celular, endereco, email, id_user)
		VALUES
		(DEFAULT, '$nome', '$celular', '$endereco', '$email', '$id_user');
		";
		$stmt = $this->db->prepare($query);
		$stmt->execute();

	}

}