<?php

class Frame extends RouterComponent {
	function __construct() {
		$router = $this->on();
		$this->presenter($router['presenter'], $router['page']);
	}

	function presenter($name, $page) {
		new $name($page);
	}
}

?>