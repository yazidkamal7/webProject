<?php

	require_once 'dp.php';
	$sql = "SELECT * FROM `customs`";
		
	 	$result = $pdo->query($sql);
	 	$result->execute();
	 	$customers=$result->fetchAll();
	 	echo '<table class="veiw">';
	 	echo "<tr>
	 			<th>";
	 	foreach ($customers as  $custmer) {
	 		
	 	}


	 	echo "</table>";

?>
