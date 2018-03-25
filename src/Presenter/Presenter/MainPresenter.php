<?php

class MainPresenter implements Presenter {
	function __construct() {
		$this->index();
	}

	public function index() { 
		require_once __PAGES__.'home.php'; 
	}
	public function add() {}
	public function edit() {}
	public function view() {}
}

?>