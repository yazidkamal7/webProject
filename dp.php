<?php
	try {
		$conn="mysql:host=localhost;dbname=c253_restaurant";
		$user = "c253main115";
 		 $pass = "RootWeb!";
 		 $pdo= new PDO($conn,$user,$pass);
	} catch (PDOExcaption $e) {
			die($e->getMessage());
	}


