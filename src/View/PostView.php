<?php

class PostView implements View {
	function __construct($page) {
		$this->$page();
	}

	public function index() { 
		require_once __VIEW__.'/Post/index.php'; 
	}
	public function add() {
		switch (substr($_SERVER['REQUEST_URI'], strlen(__APP_ROOT__ . 'post/add/'))) {
			case '1':
				require_once __VIEW__.'/Post/step-one.php'; 
				break;
			
			case '2':
				require_once __VIEW__.'/Post/step-two.php'; 
				break;

			case '3':
				require_once __VIEW__.'/Post/step-three.php'; 
				break;

			case 'review':
				require_once __VIEW__.'/Post/review.php'; 
				break;
			default:
				$this->index();	
				break;
		}

		
	}
	public function edit() {}
	public function view() {
		require_once __VIEW__.'/Post/view.php';
	}
}

?>