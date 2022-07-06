<?php include('index.php'); 

	require_once 'dp.php';


	$sql = "SELECT * FROM `product` ";
		
	 	$result = $pdo->query($sql);
	 	$result->execute();
	 	$products=$result->fetchAll();
	 	echo "test";
	 	echo '<div class="product">';
	 	foreach ($products as  $product) {
	 		echo '<div class="item">';

	 			$img = explode(",", $product['images']);
				echo '<img src="../itemsImages/'.$img[0].'">';
				
				echo '<h2>'.$product['name'].'</h2>';
				echo '<h3>'.$product['price'].'</h3>';
				echo '<h4>'.$product['type'].'</h4>';
				echo '<p>'.$product['description'].'</p>';
				echo '<button name="'.$product['productid'].'" id="submit" type="submit">order it</button>';
	
		echo "</div>";
	 	}


	 	echo "</div>";


?>
