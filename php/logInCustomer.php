<?php 

	 require_once 'dp.php';
	 $userName="";
	 $password="";
	 $result="";

	if(isset($_POST["submit"])) {
	
	 	
	 	$userName=$_POST["userName"];
	 	$password=$_POST["password"];


		$sql = "SELECT * FROM `customs` WHERE Email = '$userName' ";
		
	 	$result = $pdo->query($sql);
	 	$result->execute();
	 	$users=$result->fetchAll();
	 	foreach ($users as  $user) {
	 		
	 		if ($user['password'] == $password ) {
	 			include('index.php');	 	
	 		}
	 		else{
	 			include('custmerLogin.php');
	 		}
	 	}
	 	
	 }

	
 	 		
 ?>
