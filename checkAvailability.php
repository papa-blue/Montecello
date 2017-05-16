<!DOCTYPE HTML>
<html>
	<head>
		<title>check availability</title>
		
		<script type="text/javascript" src="lib/jq/jquery.js"></script>
		<script type="text/javascript" src="lib/jq/jqueryui.js"></script>
		<script type="text/javascript" src="lib/jq/datepicker.i18n.js"></script>
		<link rel="stylsheet" href="lib/jq/datepicker.css" type="text/css"/>
	</head>
	
	<body>
	
	<script>
			$(document).ready(function(){
				$.datepicker.setDefaults($.datepicker.regional["en-GB"]);
				$("#jqDate").datepicker($.datepicker.regional["en-GB"]);
				$("#jqDate").datepicker("option", "dateFormat","yy-mm-dd");
				$("#jqDate").datepicker({onSelect: function(){
					document.getElementById('dateForm').submit();
				document.getElementById('tt').innerHTML = "oninput listerner works";
				}});
				
			});
	</script>
	
		<form action="" id="dateForm" method="POST">
			<input type="text" name="date" id="jqDate" size="8"/>
			<input type="submit" name="submit"/>
		</form>
		
		</br>
		</br>
		</br>
		</br>
		
		<?php
		
			if(isset($_POST['submit'])){
				
			require_once('iconnect.php');
			
			$date = $_POST['date'];
			$query = "SELECT bookings.*, residence.*, stands_has_residence.*, stands.* from bookings JOIN residence ON residence_id_no = id_no JOIN stands_has_residence ON residence.id_no = stands_has_residence.residence_id_no JOIN stands ON stands_has_residence.stands_stand_id = stands.stand_id where bookings.date = '$date'";
			
			$result = @mysqli_query($dbc, $query);
			$rows = mysqli_num_rows($result);
			if ($rows >= 1)
			{
				echo '<table cellspacing="5" cellpadding="8">
						<tr>
							<td><b>First-name</b></td>
							<td><b>Surname</b></td>
							<td><b>Stand No</b></td>
							<td><b>Booked</b></td>
							<td><b>Start Time</b></td>
							<td><b>End Time</b></td>
							<td><b></b></td>
						</tr>';
						
				
				
			
			while($row = mysqli_fetch_array($result))
			
				echo '<tr>
						<td>'. $row['firstname']. '</td>
						<td>'. $row['surname']. '</td>
						<td>'. $row['stand_no']. '</td>
						<td>'. $row['description']. '</td>
						<td>'. $row['start_time']. '</td>
						<td>'. $row['end_time']. '</td>
					</tr>';
						
			}
			
			if ($rows < 1){
				echo "No Bookings have been found for this day";
			}
			}
		
		?>
	
	</body>
</html>