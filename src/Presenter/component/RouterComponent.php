<?php


class RouterComponent {

	/*
		Configuração de rotas.
	*/
    private static $routes = [
    	['name' => 'main', 'presenter' => 'MainView', 'path' => 'Pages/'],
    	['name' => 'login', 'presenter' => 'LoginView', 'path' => 'Login/'],
    	['name' => 'register', 'presenter' => 'RegisterView', 'path' => 'Register/']
    ];

    /**
     * @return string
     */
    public function on() { 
		$context = substr($_SERVER['REQUEST_URI'], strlen(__APP_ROOT__));

		foreach (self::$routes as $value) {
			if ($value['name'] == $context)
				return $value['presenter'];
		}

		return 'MainView';
    }
}

?>