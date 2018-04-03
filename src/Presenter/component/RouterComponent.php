<?php


class RouterComponent {

	/*
		Configuração de rotas.
	*/
    private static $routes = [
    	['name' => 'main', 'presenter' => 'MainView', 'page' => 'index'],
    	['name' => 'login', 'presenter' => 'LoginView', 'page' => 'index'],
    	['name' => 'register', 'presenter' => 'RegisterView', 'page' => 'index'],
        ['name' => 'post', 'presenter' => 'PostView', 'page' => 'index'],
        ['name' => 'post/view', 'presenter' => 'PostView', 'page' => 'view'],
        ['name' => 'post/add/1', 'presenter' => 'PostView', 'page' => 'add'],
        ['name' => 'post/add/2', 'presenter' => 'PostView', 'page' => 'add'],
        ['name' => 'post/add/3', 'presenter' => 'PostView', 'page' => 'add'],
        ['name' => 'post/add/review', 'presenter' => 'PostView', 'page' => 'add']
    ];

    /**
     * @return string
     */
    public function on() { 
		$context = substr($_SERVER['REQUEST_URI'], strlen(__APP_ROOT__));

		foreach (self::$routes as $value) {
			if ($value['name'] == $context)
				return $value;
		}

		return self::$routes[0];
    }
}

?>