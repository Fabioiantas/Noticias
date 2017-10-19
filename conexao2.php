<?php
	try{
		
		$bd = new PDO('mysql:host=localhost;dbname=aps01;', 'root', '');
		
	}catch(PDOException $e){
		die($e->getMessage());
	}

?>