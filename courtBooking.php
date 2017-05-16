<?php

	session_start();
	require_once('iconnect.php');
	$date = $_POST['date'];
	$stime = $_POST['starttime'];
	$etime = $_POST['endtime'];
	$id = $_SESSION['id'];
	$description = $_SESSION['court'];
	
	
	$timeLimit = ((strtotime($etime) - strtotime($stime)) / 60)/60;

	//checking if the user is not booking for more than an hour
	if (($description == "squash" || $description == "tennis") && $timeLimit > 1)
	{
		$_SESSION['booking'] = "Error: Sorry you cannot book the Squash or Tennis Court for more than an hour";
		header('Location: courtBookingGui.php');
		exit();
	}
	
	
	
	if($_SESSION['court'] == "squash" || $_SESSION['court'] == "tennis"){
		
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
		
	$query = "INSERT into bookings (date, description, start_time, end_time, residence_id_no) VALUES ('$date', '$description' ,'$stime', '$etime', '$id')";
	
	
		
	
	$results = @mysqli_query($dbc, $query);
	
	
	echo '</br>';
	
	echo "Results : ".$results;
	
	if(!$results)
	{
		header('Location: courtBookingGui.php');
		$_SESSION['booking'] = "Error inserting the booking into the database";

	}else{
		header('Location: courtBookingGui.php');
		$_SESSION['booking'] = "The booking was successful";
	}
	
	mysqli_close($dbc);
	
	}
	
	

?>