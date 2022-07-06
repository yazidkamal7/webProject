

<?php include('index.php'); ?>

<head>

	<link rel="stylesheet" type="text/css" href="../css/form.css">
	

</head>
<body>
	<div class="c">
		<a href="../php/custmerSignUp.php">Sign Up</a>
		<a href="../php/custmerLogin.php">Log In</a>
	</div>
	<div class="form" style="margin-left: 40%">
			<h2>LogIn</h2>
			<form  action="logInCustomer.php" method="POST">
				<input class="textinput" type="text" name="userName" placeholder="Email" >
				<input class="textinput" type="password" name="password" placeholder="Password">
				<button class="butid" name="submit" id="submit" type="submit" >Log In</button>

			</form>
		</div>
	</div>