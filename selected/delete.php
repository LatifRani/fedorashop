<?php
	include "connection.php";
	
	$id 	= $_POST['id'];
	
	class emp{}
	
	if (empty($id)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Error data deletion"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("DELETE FROM selected WHERE id='".$id."'");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data have been deleted";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error";
			die(json_encode($response)); 
		}	
	}
?>