<?php

	require_once('iconnect.php');
	$password = $_POST['password'];
	$id = $_POST['id'];
	$userName = $_POST['username'];
	
	$query = "SELECT * from residents where id_no = '$id' and username= '$userName'";
	
	$person = mysqli_query($dbc, $query);
	
	if ($person){
		
		$updateQuery = "UPDATE residents SET password = '$password'";
		
		
	}else if(!$person){
		
		echo "A resident with the provided id or username doesn't exist";
	}

?>