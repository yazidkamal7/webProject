<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Admin login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<div style="display: inline-flex;">
		<div class="leftside">
			<img src="../img/admin-bg.svg">
		</div>
		<div class="logIn">
			<img src="../img/logo.svg">
			<h2>Admin LogIn</h2>
			<form action="admin.php" method="POST" >
				<input class="textinput" type="text" name="userName" placeholder="User name" >
				<input class="textinput" type="password" name="password" placeholder="Password">
				<button class="butid" name="submit" id="submit" type="submit" >Log In</button>
				
			</form>
		</div>
	</div>
	
</body>
</html>
