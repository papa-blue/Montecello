<?php

	
	require_once('iconnect.php');

	$query = "SELECT bookings.*, residence.* from bookings JOIN residence ON residence_id_no = id_no where description = 'Club House'";
	$result = @mysqli_query($dbc, $query);
	echo '<table border="1" cellspacing="5" cellpadding="8">
			<tr>
				<td><b>First-name</b></td>
				<td><b>Surname</b></td>
				<td><b>Mobile</b></td>
				<td><b>Owner or Tenant</b></td>
				<td><b>E-mail</b></td>
				<td><b>description</b></td>
				<td><b>Date</b></td>
				<td><b>start_time</b></td>
				<td><b>end_time</b></td>
			</tr>';
			
	while ($row = mysqli_fetch_array($result))
	{ 
		echo '<tr>
				<td>'. $row['firstname']. '</td>
				<td>'. $row['surname']. '</td>
				<td>'. $row['mobile']. '</td>
				<td>'. $row['owner_or_tenant']. '</td>
				<td>'. $row['email']. '</td>
				<td>'. $row['description']. '</td>
				<td>'. $row['date']. '</td>
				<td>'. $row['start_time']. '</td>
				<td>'. $row['end_time']. '</td>
				<td><form action="cancelBooking.php" method="POST">
					<input type="hidden" name="id" value = "'.$row['booking_id'] .'"/>
					<input type="submit" name="submitted" value="Cancel"/>
					</form></td>
				<td><form action="approvedBooking.php" method="POST">
					<input type="hidden" name="id" value = "'.$row['booking_id'] .'"/>
					<input type="submit" name="submitted" value="Approve"/>
					</form></td>
					
			</tr>';
				
	}
?>