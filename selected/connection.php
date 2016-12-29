<?php
	
	$server		= "sql6.freemysqlhosting.net"; // sesuaikan alamat server anda
	$user		= "sql6151499"; // sesuaikan user web server anda
	$password	= "CQghLivsxh"; // sesuaikan password web server anda
	$database	= "sql6151499"; // sesuaikan database web server anda
	
	$connect = mysql_connect($server, $user, $password) or die ("Connection failed");
	mysql_select_db($database) or die ("Database empty");
?>