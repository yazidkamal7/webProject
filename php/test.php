<?php

	if(isset($_POST['submit'])){
		$file=$_FILES['image'];
		if(count($file['name'])>2){
			$dr=uploadfile($file);
			echo $dr;
		}
	}

	function uploadfile($file){

	 	$imageName= $file['name'];
	 	$imageType= $file['type'];
	 	$imageTemp= $file['tmp_name'];
	 	$imageSize= $file['size'];
	 	$imageErroe= $file['error'];

	 	$extenstion = array('jpg', 'jpeg' , 'png');
	 	$imgaeDB = array();


	 	if(!is_dir($_SERVER['DOCUMENT_ROOT']. '\itemsImages')){
				mkdir($_SERVER['DOCUMENT_ROOT']. '\itemsImages');
	 	}
	 
	 	for($i = 0 ; $i<count($imageName) ; $i++){
	 				
	 			$imageExt[$i] = pathinfo($imageName[$i],PATHINFO_EXTENSION);
	 			
	 			// strtolower(end(explode('.', $imageName[$i])));

	 			$newName[$i] =  'item' . 'img' . $i . '.' .$imageExt[$i];

	 			if (in_array($imageExt[$i], $extenstion)) {
	 				move_uploaded_file($imageTemp[$i], $_SERVER['DOCUMENT_ROOT']. '\itemsImages\\' . $newName[$i]);
	 				$imgaeDB[] =  $newName[$i];
	 				
	 			}
	 			
	 	}
	 	$imgDB = implode(',',$imgaeDB);
	 	return $imgDB;
	}

	




?>
<form class="" action="" method="POST" enctype="multipart/form-data">
	
	<input class="textinput" type="file" name="image[]" multiple="multiple" accept=".jpg, .jpeg, .png">
	<br>
		<button class="butid" name="submit" id="submit" type="submit" style="width: 150px;">Add</button>


</form>