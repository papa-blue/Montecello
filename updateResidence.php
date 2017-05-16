<html>
	<head>
		<title>Update Residence</title>
	</head>
	
	<body>
	
	<?php
	
	session_start();
	require_once('iconnect.php');
	
	if (isset($_SESSION['update']))
	{
		echo $_SESSION['update'];
	}

	$queryCollectResidence = "SELECT * from residence";
	
	$residence = @mysqli_query($dbc, $queryCollectResidence);
	
	echo '<table border="1" cellpadding="5" cellspacing="5">
			<tr>
				<td><b>First-name</b></td>
				<td><b>Surname</b></td>
				<td><b>Mobile</b></td>
				<td><b>Owner or Tenant</b></td>
				<td><b>E-mail</b></td>
				<td><b>Delete Record</b></td>
			</tr>';
			
	while ($row = mysqli_fetch_array($residence))
	{ 
		echo '<tr>
				<td>'. $row['firstname']. '</td>
				<td>'. $row['surname']. '</td>
				<td>'. $row['mobile']. '</td>
				<td>'. $row['owner_or_tenant']. '</td>
				<td>'. $row['email']. '</td>
				<td><form method="POST">
					<input type="hidden" name="id" value = "'.$row['id_no'] .'"/>
					<input type="submit" name="submitted" value="Edit"/>
					</form></td></tr>';
				
	}
	echo '</table>';
	
	echo '</br>';
	
	
	if (isset($_POST['submitted']))
	{
		$id = $_POST['id'];
		
		$query2 = "SELECT * from residence where id_no = '$id'";
		
		$result2 = @mysqli_query($dbc, $query2);
		
		$raw = mysqli_fetch_array($result2);
		echo '<div>';
		echo '<form action="updateResidenceProcessing.php" method = "POST">
				<input type="text" name="firstname" value="'.$raw['firstname'].'"/>
				<input type="text" name="surname" value="'.$raw['surname'].'"/>
				<input type="text" name="mobile" value="'.$raw['mobile'].'"/>
				<input type="text" name="type" value="'.$raw['owner_or_tenant'].'"/>
				<input type="text" name="email" value="'.$raw['email'].'"/>
				<input type="hidden" name="id" value = "'.$raw['id_no'] .'"/>
				<input type="submit" name="submit" value="Save"/>
			</form>';
				
		echo '</div>';
	}
	
	?>
	
	</body>
	
</html>