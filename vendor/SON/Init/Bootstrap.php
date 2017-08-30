<?php 

namespace SON\Init;



abstract class Bootstrap
{
	
	private $routes; // recebe $ar da classe Init;


	// Roda quando init é intanciada
	public function __construct(){
		$this->initRoutes();
		$this->run($this->getURL());
	}

	abstract protected function initRoutes();

	protected function run($url){

		global $isEncontrou;

		$isEncontrou = false;

		array_walk($this->routes, function($route) use ($url){

			if ($url == $route['route']) { // Compara o URL requisitado com as rotas disponívies
				$class = "App\\Controller\\".ucfirst($route['controller']); // Salva a classe do Controller
				$controller = new $class; // Instancia o Controller
				$action = $route['action']; // Salva a Action do Controller
				$controller->$action(); // Executa a Action do Controller
				$GLOBALS['isEncontrou'] = true;
			}

		});

		if(!$isEncontrou)
			echo "Erro 404";
	}
	
	protected function setRoutes(array $routes){
		$this->routes = $routes;
	}

	public static function getURL(){
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}	
}