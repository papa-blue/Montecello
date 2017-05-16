<?php
	SESSION_START();
	
	require_once('iconnect.php');
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$mobile = $_POST['mobile'];
	$type = $_POST['type'];
	$email = $_POST['email'];
	$id_no = $_POST['id'];
	
	
	$query = "UPDATE residence SET firstname='$firstname', surname='$surname', mobile='$mobile', owner_or_tenant='$type', email='$email' where id_no='$id_no'";
	
	$results = @mysqli_query($dbc, $query);
	
	$check = mysqli_num_rows($results);
	
	if ($check < 0){
		
		header('Location: updateResidence.php');
		$_SESSION['update'] = "Error updating the record";
	}else
	{
		header('Location: updateResidence.php');
		$_SESSION['update'] = "Record updated succefully";
	}
	

	


?>