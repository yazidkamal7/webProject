<?php 

	require_once 'dp.php';

	$name="";
	$type = "";
	$price;
	$size="";
	$discraption="";
	$file;


	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$type=$_POST['type'];
		$price=$_POST['price'];
		$size=$_POST['size'];
		$discraption=$_POST['desciption'];
		$file=$_FILES['image'];

		

		if(isEmpty($name,$type,$price,$size,$discraption,$file)){
			header("location: addNewProduct.php?error=emptyFiled");
			exit();
		}
		
		if(!isString($name)){
			header("location: addNewProduct.php?error=name");
			exit();
			
		}
		if(!is_numeric($price)){
			header("location: addNewProduct.php?error=price=$price");
			exit();
		}
		$p=doubleval($price);


		if(count($file['name'])>2){
			$sql="INSERT INTO `product`( `name`, `type`, `price`, `size`, `description`,`images`) VALUES ('$name','$type',$p,'$size','$discraption','NULL')";

			$pdo->query($sql);

			
			$id = $pdo->lastInsertId();
			
			$imageUp=uploadfile($file,$id);
			
			
			$sql="UPDATE `product` SET `images` = '$imageUp' WHERE `product`.`productid` = $id";


			$pdo->query($sql);

			header("location: addNewProduct.php?done");


			
		}else{
			header("location: addNewProduct.php?error=numberOFimegelessThanmainlimite");
			exit();
		}
	

	}


	 function isEmpty($name,$type,$price,$size,$discraption,$file){
	 	
	 	if(empty($name) || empty($type) || empty($price) || empty($size) || 
	 		empty($discraption) || empty($file) ){
	 		return true;
	 	}

	 	return false;
	 }

	 function isString($st){
	 	if(preg_match("/^[a-zA-Z]*$/", $st))
	 		return true;
	 	return false;
	 }
	 function uploadfile($file,$id){

	 	$imageName= $file['name'];
	 	$imageType= $file['type'];
	 	$imageTemp= $file['tmp_name'];
	 	$imageSize= $file['size'];
	 	$imageErroe= $file['error'];

	 	$extenstion = array('jpg', 'jpeg' , 'png');
	 	$imgaeDB = array();


	 	if(!is_dir($_SERVER['DOCUMENT_ROOT']. '\WebProject\itemsImages')){
				mkdir($_SERVER['DOCUMENT_ROOT']. '\WebProject\itemsImages');
	 	}
	 
	 	for($i = 0 ; $i<count($imageName) ; $i++){
	 				
	 			$imageExt[$i] = pathinfo($imageName[$i],PATHINFO_EXTENSION);
	 			
	 			

	 			$newName[$i] =  'item' . $id .'img' . $i . '.' .$imageExt[$i];

	 			if (in_array($imageExt[$i], $extenstion)) {

	 				move_uploaded_file($imageTemp[$i], $_SERVER['DOCUMENT_ROOT']. '\WebProject\itemsImages\\' . $newName[$i]);

	 				$imgaeDB[] =  $newName[$i];
	 				
	 			}
	 			
	 	}
	 	$imgDB = implode(',',$imgaeDB);
	 	return $imgDB;
	}

?>