<?php 

	 require_once 'dp.php';
	 $userName="";
	 $password="";
	 $result="";

	if(isset($_POST["submit"])) {
	
	 	
	 	$userName=$_POST["userName"];
	 	$password=$_POST["password"];


		$sql = "SELECT * FROM admin WHERE username = '$userName' ";
		
	 	$result = $pdo->query($sql);
	 	$result->execute();
	 	$users=$result->fetchAll();
	 	foreach ($users as  $user) {
	 		
	 		if ($user['passwords'] == $password ) {
	 			include('adminControl.php');

	 		}
	 		else{
	 			include('adminlogin.php');
	 		}
	 	}
	 	
	 }

	
 	 		
 ?>
