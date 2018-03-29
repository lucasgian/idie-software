<?php

class LoginView implements View {
	function __construct() {
		$this->index();
	}

	public function index() { 
		require_once __VIEW__.'Login/index.php'; 
	}
	public function add() {}
	public function edit() {}
	public function view() {}
}

?>