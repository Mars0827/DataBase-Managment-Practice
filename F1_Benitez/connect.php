<?php 
	$connection = new mysqli('127.0.0.1', 'root','','dbbenitezf1');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>