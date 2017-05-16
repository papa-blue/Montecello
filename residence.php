<html>
	<head>
		<title>Manage Residence</title>
		<script src= "boot/js/bootstrap.min.js"></script>
		<script src= "boot/js/bootstrap.js"></script>
		<script src= "boot/css/bootstrap.min.css"></script>
		
	</head>
	
	<body>
	

		<?php
		date_default_timezone_set("Africa/Johannesburg");
		require_once('iconnect.php');
			echo date("h:i");
			echo '</br>';
			echo "20" . date("y/m/d");
			
		$query = "SELECT * from residence";
		
		$results = @mysqli_query($dbc, $query);
		
			echo '<table class="table">
					
						<tr>
							<td>Id Number</td>
							<td>Name</td>
							<td>Surname</td>
							<td>mobile</td>
							<td>owner_or_tenant</td>
							<td>E-mail</td>
							<td>Manage</td>
						</tr>';
						
			while ($row = mysqli_fetch_array($results)){
				echo '<tr><td>'.
				$row['firstname']. '</td><td>'.
				$row['surname']. '</td><td>'.
				$row['mobile']. '</td><td>'.
				$row['owner_or_tenant']. '</td><td>'.
				$row['email']. '</td><td>'.
				$row['id_no']. '</td> <td><a href="edit.php">Edit</a></td> <td><a href="delete.php">Delete</a></td>';
				
				echo '</tr>';
			}
			
			echo '</table>';
			
			
			
				
			mysqli_close($dbc);
				
		?>
	</body>
</html>