

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
	<h2>Sign up</h2>
	<form action="addNewCostomer.php" method="POST" >
		<input class="textinput" type="text" name="fname" placeholder="first name" >
		<input class="textinput" type="text" name="lname" placeholder="last name" >
		<input class="textinput" type="email" name="email" placeholder="email Adress" >
		<input class="textinput" type="text" name="Phone" placeholder="phone number" >
		<select class="textinput" name="city">
	   				<option value="" disabled selected>Choose City</option>
	   				<option value="Jerusalem">Jerusalem</option>
	   				<option value="Ramallah">Ramallah</option>
	   				<option value="Nablus">Nablus</option>
	   				<option value="Hebron">Hebron</option>
	   				<option value="Bethlehem">Bethlehem</option>
	   				<option value="Tulkarm">Tulkarm</option>
	   				<option value="Tubas">Tubas</option>
	   				<option value="Qalqilya">Qalqilya</option>
   		</select>
		<input class="textinput" type="text" name="Adress" placeholder="Adress" >
		<input class="textinput" type="password" name="password1" placeholder="Password">
		<input class="textinput" type="password" name="password2" placeholder="re-Password">
		<button class="butid" name="submit" id="submit" type="submit" style="width: 200px;">Sign UP</button>
	</form>
</div>

	
</body>
