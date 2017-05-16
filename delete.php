<?php
	
	session_start();
	require_once('iconnect.php');
	
	
	if(isset($_SESSION['delete']))
	{
		echo $_SESSION['delete'];
	}
	
	include("pagination/function.php");
	$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 5; //if you want to dispaly 10 records per page then you have to change here
    	$startpoint = ($page * $limit) - $limit;
        $statement = "residence order by name asc"; //you have to pass your query over here
		
	$queryCollectResidence = "SELECT * from {$statement} LIMIT {$startpoint} , {$limit}";
	
	$residence = @mysqli_query($dbc, $queryCollectResidence);
	
	echo '<table cellspacing="5" cellpadding="8">
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
				<td><form action="deleteProcessing.php" method="POST">
					<input type="hidden" name="id" value = "'.$row['id_no'] .'"/>
					<input type="submit" name="submitted" value="Delete"/>
					</form></td></tr>';
				
	}
	
	echo '</table>';
	
	
echo '<div id="pagingg" >';
echo pagination($statement,$limit,$page);
echo '</div>';
	
	echo '</br>';
	
	mysqli_close($dbc);
	
	

?>