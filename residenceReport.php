<?php
	require_once('iconnect.php');
	
	$query = "SELECT residence.*, stands_has_residence.*, stands.* from residence JOIN stands_has_residence ON id_no = residence_id_no JOIN stands ON stands.stand_id = stands_has_residence.stands_stand_id";
	$result = @mysqli_query($dbc, $query);
	echo '<table cellspacing="5" cellpadding="8">
			<tr>
				<td><b>First-name</b></td>
				<td><b>Surname</b></td>
				<td><b>Mobile</b></td>
				<td><b>Owner or Tenant</b></td>
				<td><b>E-mail</b></td>
				<td><b>Stand Number</b></td>
			</tr>';
			
	while ($row = mysqli_fetch_array($result))
	{ 
		echo '<tr>
				<td>'. $row['firstname']. '</td>
				<td>'. $row['surname']. '</td>
				<td>'. $row['mobile']. '</td>
				<td>'. $row['owner_or_tenant']. '</td>
				<td>'. $row['email']. '</td>
				<td>'. $row['stand_no']. '</td>
			</tr>';
				
	}
	
?>
