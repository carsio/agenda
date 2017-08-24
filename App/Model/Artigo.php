<?php 

namespace App\Model;
use PDO;

class Artigo{

	protected $db;

	public function __construct(PDO $db)
	{
		$this->db = $db;

		
	}

	public function artigoFetchAll()
	{
		$query = "SELECT * FROM ARTIGOS";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		$fetch = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();

		return $result; 
	}

}