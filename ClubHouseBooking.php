<?php
	session_start();
	require_once('iconnect.php');
	$date = $_POST['date'];
	$fee = "R500";
	$bookedDate = date('Y-m-d');
	$status = "Booked";

	$description = "club house";
	$etime = "12:00";
	$stime = "08:00";
	$id = $_SESSION['id'];
	$description = $_SESSION['court'];
	
	echo '</br></br>';
	
	$timeLimit = (strtotime($etime) - strtotime($stime)) / 60;

	
	
	//checking if the club house is not booked for that day
	if($description == "club house"){
		
		$checkDateClub = "SELECT * from bookings where date = '$date' AND description = '$description'";
		$clubSeach = @mysqli_query($dbc, $checkDateClub);
		$clubFound = mysqli_fetch_array($clubSeach);
		
		if($clubFound){
			$_SESSION['booking'] = "Error: Sorry the club house is already booked for that day, please select an available date";
			//header('Location: bookings.html');
		
			echo "Error: Sorry the time slot you selected is already booked";
			exit();
		}
		
	}
	
	$query = "INSERT into bookings (date, description, start_time, end_time, residence_id_no, bookingStatus, bookedDate) VALUES ('$date', '$description' ,'$stime', '$etime', '$id','$status', '$bookedDate')";
	
	
		
	
	$results = @mysqli_query($dbc, $query);
                                                                                   
	
	if(!$results)
	{
		header('Location: clubhouseBookingGui.php');
		$_SESSION['booking'] = "Error inserting the booking into the database mysqli: ".mysqli_error($dbc);

	}else{
		
		echo '<form name="msg" id="successMsgForm" action="clubhouseBookingGui.php" method="POST">
				<input type="hidden" name="success" value="Club house booked succefully">
		      		</form>';
		
			 ?>
			  
			  <script type="text/javascript">
				document.getElementById('successMsgForm').submit();
			  </script>
			  
			  <?php
	}

?>