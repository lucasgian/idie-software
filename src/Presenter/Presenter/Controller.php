<?php

class Controller extends RouterComponent {
	function __construct() {
		$this->presenter($this->on());
	}

	function presenter($name) {
		new $name();
	}
}

?>