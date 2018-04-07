<?php

class PostTable extends DataBase {
	static function add($post) {
		try {
		    $conn = new PDO("mysql:host=localhost;dbname=idie_software", 'root', '');
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		    $sql = "
			INSERT INTO post
	    	VALUES (
	    		0,
	    		0,
		    	'".$post->getName()."', 
		    	'".$post->getTitle()."', 
		    	'".$post->getCategory()."', 
		    	'".$post->getDescription()."'
	    	)
	    ";
	    
	    $conn->exec($sql);
		} 
		catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}	

		
	}
	public function update() {}
	public function delete() {}
	public function select() {}
}