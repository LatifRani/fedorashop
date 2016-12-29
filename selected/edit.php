<?php
	include "connection.php";
	
	$id 	= $_POST['id'];
	
	class emp{}
	
	if (empty($id)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Error get data"; 
		die(json_encode($response));
	} else {
		$query 	= mysql_query("SELECT * FROM selected WHERE id='".$id."'");
		$row 	= mysql_fetch_array($query);
		
		if (!empty($row)) {
			$response = new emp();
			$response->success = 1;
			$response->id = $row["id"];
			$response->product = $row["product"];
			$response->price = $row["price"];
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error get data";
			die(json_encode($response)); 
		}	
	}
?>