<?php 
namespace App;

use SON\Init\Bootstrap;
use PDO;



class Init extends Bootstrap
{
	
	protected function initRoutes()
	{
		$ar['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
		$ar['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');
		$ar['pessoa'] = array('route' => '/pessoa', 'controller' => 'pessoa', 'action' => 'listar');
		$ar['contato'] = array('route' => '/contato', 'controller' => 'contato', 'action' => 'contato');
		$ar['novo'] = array('route' => '/novo', 'controller' => 'contato', 'action' => 'novo');
		$ar['menu'] = array('route' => '/menu', 'controller' => 'menu', 'action' => 'menu');
		$this->setRoutes($ar);
	}

	public static function getDb(){

		/* Connect to a MySQL database using driver invocation */
		$dsn = 'mysql:dbname=mvc;host=127.0.0.1';
		$user = 'root';
		$password = '';

		try {
		    $conn = new PDO($dsn, $user, $password);
		    // echo "Success</br>";
		    // $sql = "SELECT * FROM ARTIGOS"
		    // $row = $conn->query($sql);

		} catch (PDOException $e) {
		    echo 'Connection failed: ' . $e->getMessage();
		}
		
		return $conn;
	}
}