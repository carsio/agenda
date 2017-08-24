<?php 
namespace SON\Controller;

class Action
{
	protected $view; 
	protected $action;	

	function __construct()
	{
		$this->view = new \stdClass();
	}


	public function render($action, $layout=true)
	{	
		$this->action = $action;

		if ($layout == true && file_exists("../App/View/layout.phtml ")) {
			include_once '../App/View/layout.phtml';
		}
		else{
			$this->content();
		}
	}

	protected function content()
	{
		$class = get_class($this);
		$class = str_replace('App\\Controller\\', '', $class);
		include_once '../App/View/'.$class.'/'.$this->action.'.phtml';
	}
}