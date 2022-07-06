<?php include('adminControl.php'); ?>
<link rel="stylesheet" type="text/css" href="../css/form.css">
<div class="form">
	<h2>Add new Employee</h2>
	<form action="addnewE.php" method="POST" >
		<input class="textinput" type="text" name="fname" placeholder="first name" >
		<input class="textinput" type="text" name="lname" placeholder="last name" >
		<input class="textinput" type="email" name="email" placeholder="email Adress" >
		<input class="textinput" type="text" name="Phone" placeholder="phone number" >
		<input class="textinput" type="password" name="password1" placeholder="Password">
		<input class="textinput" type="password" name="password2" placeholder="re-Password">
		<button class="butid" name="submit" id="submit" type="submit" style="width: 150px;">Add</button>

	</form>
</div>
