<?php

class Frame extends RouterComponent {
	function __construct() {
		$this->presenter($this->on());
	}

	function presenter($name) {
		new $name();
	}
}

?>