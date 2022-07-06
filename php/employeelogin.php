 <?php 

	 require_once 'dp.php';
	 $userName="";
	 $password="";
	
	
	if(isset($_POST["submit"])) {
		

		
	 	
	 	$userName=$_POST["userName"];
	 	$password=$_POST["password"];

		$sql = "SELECT * FROM employee WHERE Email = '$userName' ";
		
	 	$result = $pdo->query($sql);
	 	$result->execute();
	 	$users=$result->fetchAll();
	 	
	 	foreach ($users as  $user) {
	 		
	 		if ($user['password'] == $password ) {
	 		
					header("locetion:empControl.php");

	 		}
	 		else{
	 			header("location: ../HTML/elogin.html?error=havaSomeError");

	 		}
	 	}
	 	
	 }

	
 	 		
 ?>
  
