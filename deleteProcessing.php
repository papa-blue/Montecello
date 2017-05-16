<?php

	if(isset($_POST['submitted']))
	{
		session_start();
		require_once('iconnect.php');
		
		$id_no = $_POST['id'];
		
		$query = "DELETE from registration_report where residence_id_no = '$id_no'";
		$query1 = "DELETE from bookings where residence_id_no = '$id_no'";
		$query2 = "DELETE from stands_has_residence where residence_id_no = '$id_no'";
		$query3 = "DELETE from residence where id_no = '$id_no'";
		
		
		$result = @mysqli_query($dbc, $query);
		$result1 = @mysqli_query($dbc, $query1);
		$result2 = @mysqli_query($dbc, $query2);
		$result3 = @mysqli_query($dbc, $query3);
		$num = mysqli_num_rows($result);

		
		if(!$result)
		{
			header('Location: delete.php');
			$_SESSION['delete'] = "Error: Records coudnt be deleted from the 'registration_report' table";	
		}
		if(!$result1)
		{
			header('Location: delete.php');
			$_SESSION['delete'] = "Error: Records coudnt be deleted from the 'bookings' table";	
		}
		if(!$result2){
			header('Location: delete.php');
			$_SESSION['delete'] = "Error: Records coudnt be deleted from the 'stands_has_residence' table";
		}
		if(!$result3)
		{
			header('Location: delete.php');
			$_SESSION['delete'] = "Error: Records coudnt be deleted from the 'residence' table";
			
		}
		else if($result1 && $result2 && $result3)
		{
			header('Location: delete.php');
			$_SESSION['delete'] = "Record deleted successfully";
		}
		
		mysqli_close($dbc);
		
	}
?>