<?php
	include "connection.php";
	
	$product= $_POST['product'];
	$price= $_POST['price'];
	
	class emp{}
	
	if (empty($product) || empty($price)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Required space must fill"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("INSERT INTO tesco (id,product,price) VALUES(0,'".$product."','".$price."')");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data saved";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error data save";
			die(json_encode($response)); 
		}	
	}
?>