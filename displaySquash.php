<?php
		
			if(isset($_POST['check_squash_date'])){
				
			require_once('scripts/iconnect.php');
			
			$date = $_POST['squash_date'];
			$query = "SELECT bookings.*, residents.*, stands_has_residence.*, stands.* from bookings JOIN residents ON residence_id_no = id_no JOIN stands_has_residence ON residents.id_no = stands_has_residence.resident_id_no JOIN stands ON stands_has_residence.stands_stand_id = stands.stand_id where bookings.date = '$date' and bookings.description = 'Squash'";
			
			$result = @mysqli_query($dbc, $query);
			$rows = mysqli_num_rows($result);
			if ($rows >= 1)
			{
				echo '<table cellspacing="5" cellpadding="8" style="position:absolute;left:514px;top:146px;">
						<tr>
							<td><b>Name</b></td>
							<td><b>Surname</b></td>
							<td><b>Status</b></td>
							<td><b>Time</b></td>
							<td><b>Description</b></td>	
						</tr>';
						
				
				
			
			while($row = mysqli_fetch_array($result))
			{
				echo '<tr>
						<td>'. $row['firstname']. '</td>
						<td>'. $row['surname']. '</td>
						<td>'. $row['status']. '</td>
						<td>'. $row['start_time']. '</td>
						<td>'. $row['description']. '</td>
					</tr>';
						
			}
			}
			
			if ($rows < 1){
				echo '<p style="position:absolute;left:614px;top:246px;"> No Bookings have been found for this day'. mysqli_error($dbc).' </p>';
			}
			}
		
		?>