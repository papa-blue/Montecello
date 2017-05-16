<?php
	mysqli_report(MYSQLI_REPORT_ALL);

	require_once('iconnect.php');
	
	$query = "INSERT into bookings (date, description, start_time, end_time, residence_id_no) VALUES ('12-03-2017', 'tennis' ,'10:34', '11:34', '1')";
	
	try
	{
		
	
	$results = @mysqli_query($dbc, $query);
	
	}
	catch(mysqli_sql_exception $e){
		throw $e;
	}
	
	mysqli_close($dbc);

?>