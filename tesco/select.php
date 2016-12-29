<?php 
	include "connection.php";
	
	$query = mysql_query("SELECT * FROM tesco ORDER BY product ASC");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);
	
?>