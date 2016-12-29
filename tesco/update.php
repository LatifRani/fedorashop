<?php
	include "connection.php";
	
	$id 	= $_POST['id'];
	$product 	= $_POST['product'];
	$price = $_POST['price'];
	
	class emp{}
	
	if (empty($id) || empty($product) || empty($price)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Required space must be filled"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("UPDATE tesco SET product='".$product."', price='".$price."' WHERE id='".$id."'");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data successfully update";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error updating data";
			die(json_encode($response)); 
		}	
	}
?>