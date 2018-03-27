<?php


class RouterComponent {

	/*
		Configuração de rotas.
	*/
    private static $routes = [
    	['name' => 'main', 'presenter' => 'MainPresenter', 'path' => ''],
    	['name' => 'login', 'presenter' => 'login.php', 'path' => '']
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

		return 'MainPresenter';
    }
}

?>