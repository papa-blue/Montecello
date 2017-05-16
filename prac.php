<?php
	
	$ownerOrTenant = $_POST['edit_test1'];
	
	require_once('scripts/iconnect.php');
	
	$query = "SELECT * from residents where owner_or_tenant = '$ownerOrTenant'";
	
	$result = mysqli_query($dbc, $query);
	
	echo '<table cellspacing="5" cellpadding="8">
			<tr>
				<td><b>First-name</b></td>
				<td><b>Surname</b></td>
				<td><b>Mobile</b></td>
				<td><b>E-mail</b></td>
				
				<td><b></b></td>
			</tr>';
			
	while ($row = mysqli_fetch_array($result))
	{ 
		echo '<tr>
				<td>'. $row['firstname']. '</td>
				<td>'. $row['surname']. '</td>
				<td>'. $row['mobile']. '</td>
				<td>'. $row['email']. '</td>
				
			</tr>';
				
	}

?>