<?php
	try {
			$conn="mysql:host=localhost;dbname=restaurant";
		$user = "root";
 		 $pass = "";
 		 $pdo= new PDO($conn,$user,$pass);
	} catch (PDOExcaption $e) {
			die($e->getMessage());
	}


