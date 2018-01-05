<?php

require __DIR__ . '/../controllers/Controller.php';

class Router {
	const PATH = __DIR__ . '/../controllers';
	const DEFAULT_CONTROLLER = 'home';
	
	private $paths = [];
	
	public function register($routing) {
		foreach($routing as $route) {
			// controller file validation
			if (!file_exists(self::PATH . '/' . $route['name'] . '.php')) {
				die('Controller file for ' . $route['name'] . ' not exists!');
			}
			
			// import controller class file
			require_once(self::PATH . '/' . $route['name'] . '.php');
			
			// controller class validation
			if (!class_exists($route['name'])) {
				die('Controller named by ' . $route['name'] . ' not contain controller class!');
			}
			
			// create instance of every controller
			$this->paths[$route['path']] = new $route['name']();
		}
	}
	
	public function init($get, $post) {
		if (isset($get['page']) && isset($this->paths[$get['page']])) {
			return $this->paths[$get['page']]->render($get, $post);
		}
		
		return $this->paths['home']->render();
	}
}