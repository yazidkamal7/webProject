<?php include('adminControl.php'); ?>
<link rel="stylesheet" type="text/css" href="../css/form.css">
<div class="form">
	<h2>Add new Product</h2>
	<form action="addnewP.php" method="POST" enctype="multipart/form-data">
		<input class="textinput" type="text" name="name" placeholder="product name" >
			<select class="textinput" name="type">
	   				<option value="" disabled selected>Choose Type</option>
	   				<option value="meal">meal</option>
	   				<option value="starters">Food starters</option>
	   				<option value="Drink">Drink</option>
   				</select>
		<input class="textinput" type="text" name="price" placeholder="price" >
			<div >
			   	<label >Size</label>
			   	<input  type="radio" name="size" value="s">S
			   	<input  type="radio" name="size" value="m" checked>M
			   	<input  type="radio" name="size" value="l" >L
	   		</div>
		<textarea class="textinput" rows="4" cols="50" name="desciption"> desciption</textarea>
		<input class="textinput" type="file" name="image[]" multiple="multiple" accept=".jpg, .jpeg, .png">
		<button class="butid" name="submit" id="submit" type="submit" style="width: 150px;">Add</button>

	</form>
</div>
</body>
</html>