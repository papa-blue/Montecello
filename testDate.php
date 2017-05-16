<?php
	date_default_timezone_set('Africa/Johannesburg');
	require_once('iconnect.php');
	$date = date('Y-m-d');
	$date2 = date('Y-m-d');
	
	$answer = $date - $date2;
	
	echo $answer;
	
	$query = "SELECT * from bookings where description='Club House'";
	
	$result = mysqli_query($dbc, $query);
	
	while ($row = mysqli_fetch_array($result)){
		
		$daysBooked = $date - $row['bookedDate'];
		
		if($daysBooked >= 2){
			$query = "UPDATE bookings SET description='Unprocessed' where booking_id = '$row[booking_id]'";
		
		}
	}

?>