<?php 
	
	require_once 'dp.php';
	$firstname="";
	$lastname = "";
	$email = "";
	$phone="";
	$city="";
	$address="";
	$password1="";
	$password2="";

	if(isset($_POST['submit'])){

		$firstname=$_POST['fname'];
		$lastname = $_POST['lname'];
		$email = $_POST['email'];
		$phone=$_POST['Phone'];
		$city=$_POST['city'];
		$address=$_POST['Adress'];
		$password1=$_POST['password1'];
		$password2=$_POST['password2'];


		

		if(isEmpty($firstname,$lastname,$email,$phone,$city,$address,$password1,$password2)){

	 		header("location: custmerSignUp.php?error=emptyfileds");
	 		exit();
	 	}
		
			
		
		
		if(!isString($firstname)){
			header("location: custmerSignUp.php?error=firstname");
			exit();
			
		}
		if(!isString($lastname)){
			header("location: custmerSignUp.php?error=lastname");
			exit();
			
		}

		if(!isEmail($email)){
			header("location: custmerSignUp.php?error=Email");
			exit();
		}
		if(!isPhoneNumber($phone)){
			header("location: custmerSignUp.php?error=phone");
			exit();
		}
		if(!isString($address)){
			header("location: custmerSignUp.php?error=address");
			exit();
			
		}
		if(!isValidPassWord($password1)){
			header("location: custmerSignUp.php?error=password");
			exit();
		}


	
		if($password1 == $password2){
				$sql = "INSERT INTO `customs`( `Email`, `password`, `city`, `adress`, `phone`, `firstName`, `lastname`) VALUES ('$email','$password1','$city','$address','$phone','$firstname','$lastname')";
		
	 		 $pdo->query($sql);

	 		include('index.php');

		}
		else{
			header("location: custmerSignUp.php?error=passwordDontMatches");
			exit();
		}
	
	}
	


	 function isEmpty($firstname,$lastname,$email,$phone,$city,$address,$password1,$password2){
	 	
	 	if(empty($firstname) || empty($lastname) || empty($email) || empty($phone) || 
	 		empty($city) || empty($address) || empty($password1) || empty($password2) ){

	 		return true;
	 	}

	 	return false;
	 }
	 function isString($st){
	 	if(preg_match("/^[a-zA-Z]*$/", $st))
	 		return true;
	 	return false;
	 }
	 function isEmail($email){
	 	 $find1 = strpos($email, '@');
  		 $find2 = strpos($email, '.');
 		  return ($find1 !== false && $find2 !== false && $find2 > $find1);
	 }

	 function isPhoneNumber($phone){
	 	if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone))
	 		return true;
	 	return false;
	 }
	 function isValidPassWord($pass){
	 	if(strlen($pass)>7 && strlen($pass)<13){
	 		return true;
	 	}
	 	return false;
	 }

?> 