<?php

class RegisterView implements View {
	function __construct() {
		$this->index();
	}

	public function index() { 
		require_once __VIEW__.'Register/index.php'; 
	}
	public function add() {}
	public function edit() {}
	public function view() {}
}

?>