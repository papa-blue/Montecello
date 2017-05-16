<?php

	if(isset($_POST['reservation'])){
		
		$date = $_POST['date_2'];
		$stime = $_POST['time'];
		$id = $_SESSION['id'];
		$description = "Tennis";
		$etime = $_POST['etime'];
		
		require_once('iconnect.php');
		
		$checkDateAndTime = "SELECT * from bookings where date = '$date'";
	
		$seach = @mysqli_query($dbc, $checkDateAndTime);
		
		while ($row = mysqli_fetch_array($seach)){
			
			if(strtotime($row['start_time']) == strtotime($stime))
			{
				$_SESSION['booking'] = "Error: Sorry the time slot you selected is already booked";
				header('Location: courtBookingGui.php');
				
				echo "Error: Sorry the time slot you selected is already booked";
				exit();
			}
			if((strtotime($stime) - strtotime($row['start_time']) ) < 60){
				
				$_SESSION['booking'] = "Error: Sorry the time slot you selected is already booked";
				header('Location: courtBookingGui.php');
				
				echo "Error: Sorry the time slot you selected is already booked";
				echo (strtotime($stime) - strtotime($row['start_time']) );
				exit();
			}
			
			if((strtotime($row['start_time']) - strtotime($stime) )  < 60){
				
				$_SESSION['booking'] = "Error: Sorry the time slot you selected is already booked";
				header('Location: courtBookingGui.php');
				
				echo "Error: Sorry the time slot you selected is already booked";
				(strtotime($stime) - strtotime($row['start_time']) );
				exit();
			}
		}
		$query = "INSERT into bookings (date, description, start_time, end_time, residence_id_no, status) VALUES ('$date', '$description' ,'$stime', '$etime', '$id', 'reserved')";
	
		$results = @mysqli_query($dbc, $query);
	
	
		echo '</br>';
	
		echo "Results : ";
	
		if(!$results)
		{
			 header('Location: tennis_court_booking_gui.php');
			$_SESSION['booking'] = "Error inserting the booking into the database". mysqli_error($dbc);

		}else{
			header('Location: tennis_court_booking_gui.php');
			$_SESSION['booking'] = "The booking was successful";
		}
		
		mysqli_close($dbc);
		}

?>