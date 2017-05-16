<!DOCTYPE html>
<html>

<form action="" method="POST">
	<label>Pick A Date: </label>
	<input type="date" id="date" name="date"/>
	<input type="submit" name="submit"/>
</form>
</br></br>
<?php

	if(isset($_POST['submit'])){
		
		echo '<form action="courtBooking.php" method="POST">
		
			<label>Pick The Start Time: </label>
			<input type="time" name="starttime"/>
			
			<label>Pick The End Time: </label>
			<input type="time" name="endtime"/>
						
			<input type="submit" name="submit"/>
		
		</form>';
		
		require_once('iconnect.php');
			
			$date = $_POST['date'];
			$query = "SELECT bookings.*, residence.*, stands_has_residence.*, stands.* from bookings JOIN residence ON residence_id_no = id_no JOIN stands_has_residence ON residence.id_no = stands_has_residence.residence_id_no JOIN stands ON stands_has_residence.stands_stand_id = stands.stand_id where bookings.date = '$date'";
			
			$result = @mysqli_query($dbc, $query);
	echo '<table cellspacing="5" cellpadding="8">
			<tr>
				<td><b>First-name</b></td>
				<td><b>Surname</b></td>
				<td><b>Mobile</b></td>
				<td><b>E-mail</b></td>
				<td><b>Stand No</b></td>
				<td><b>Booked</b></td>
				<td><b>Start Time</b></td>
				<td><b>End Time</b></td>
				<td><b></b></td>
			</tr>';
			
	while ($row = mysqli_fetch_array($result))
	{ 
		echo '<tr>
				<td>'. $row['firstname']. '</td>
				<td>'. $row['surname']. '</td>
				<td>'. $row['mobile']. '</td>
				<td>'. $row['email']. '</td>
				<td>'. $row['stand_no']. '</td>
				<td>'. $row['description']. '</td>
				<td>'. $row['start_time']. '</td>
				<td>'. $row['end_time']. '</td>
			</tr>';
				
	}
	}

?>

</html>