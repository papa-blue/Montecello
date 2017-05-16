<?php
	
	session_start();
	require_once('iconnect.php');
	$date = $_POST['date'];
	$stime = $_POST['starttime'];
	$etime = $_POST['endtime'];
	$description = $_POST['event'];
	$id = $_SESSION['id'];
	
	echo '</br></br>';
	
	$timeLimit = (strtotime($etime) - strtotime($stime)) / 60;

	//checking if the user is not booking for more than an hour
	if ($description == "squash" || $description == "tennis" && $timeLimit > 60)
	{
		$_SESSION['booking'] = "Error: Sorry you cannot book the Squash or Tennis Court for more than an hour";
		header('Location: courtBookingGui.php');
		exit();
	}
	
	
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
	
	
	if($description == "squash" || $description == "tennis"){
		
		$checkDateAndTime = "SELECT * from bookings where date = '$date'";
	
		$seach = @mysqli_query($dbc, $checkDateAndTime);
		
		while ($row = mysqli_fetch_array($seach)){
			
			if(strtotime($row['start_time']) == strtotime($stime))
			{
				$_SESSION['booking'] = "Error: Sorry the time slot you selected is already booked";
				//header('Location: bookings.html');
				
				echo "Error: Sorry the time slot you selected is already booked";
				exit();
			}
			if((strtotime($stime) - strtotime($row['start_time']) ) < 60){
				
				$_SESSION['booking'] = "Error: Sorry the time slot you selected is already booked";
				//header('Location: bookings.html');
				
				echo "Error: Sorry the time slot you selected is already booked";
				echo (strtotime($stime) - strtotime($row['start_time']) );
				exit();
			}
			
			if((strtotime($row['start_time']) - strtotime($stime) )  < 60){
				
				$_SESSION['booking'] = "Error: Sorry the time slot you selected is already booked";
				//header('Location: bookings.html');
				
				echo "Error: Sorry the time slot you selected is already booked";
				(strtotime($stime) - strtotime($row['start_time']) );
				exit();
			}
		}
	}

	
	
	$query = "INSERT into bookings (date, description, start_time, end_time, residence_id_no) VALUES ('$date', '$description' ,'$stime', '$etime', '$id')";
	
	try
	{
		
	
	$results = @mysqli_query($dbc, $query);
	
	
	echo '</br>';
	
	echo "Results : ".$results;
	
	if(!$results)
	{
		//header('Location: bookings.html');
		$_SESSION['booking'] = "Error inserting the booking into the database";

	}else{
		//header('Location: bookings.html');
		$_SESSION['booking'] = "The booking was successful";
	}
	}
	Catch(SQLException $er){
		
	}
	

?>