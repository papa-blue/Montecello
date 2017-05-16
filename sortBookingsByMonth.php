<?php

	require_once('iconnect.php');
	$month = $_POST['month'];
	$query = "SELECT * from bookings where month = '$month'";
	
	result = mysqli_query($dbc, $query);
	

?>