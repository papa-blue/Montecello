<?php

if(isset($_POST['submitted']))
	{
		session_start();
		require_once('iconnect.php');
		
		$id = $_POST['id'];
		
	
		$query1 = "UPDATE bookings SET bookingStatus = 'Cancelled' where booking_id = '$id'";
		$result1 = @mysqli_query($dbc, $query1);
		
		if(!$result1)
		{
			header('Location: reportBookingsGui.php');
			$_SESSION['cancel_booking'] = "Error: Sorry the booking couldnt be cancelled :mysqliError = " + mysqli_error($dbc);	
		}
		else if($result1){
			header('Location: reportBookingsGui.php');
			$_SESSION['cancel_booking'] = "Booking cancelled successfully";
		}
		
				
		mysqli_close($dbc);
		
	}

?>