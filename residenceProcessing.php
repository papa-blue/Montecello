<html>
<head>
	<title>Creating new user</title>
</head>

<body>

<?php

	date_default_timezone_set("Africa/Johannesburg");
	SESSION_START();
	require_once('iconnect.php');
	$firstname = mysqli_real_escape_string($dbc, $_POST['firstname']);
	$surname = mysqli_real_escape_string($dbc, $_POST['surname']);
	$mobile = mysqli_real_escape_string($dbc, $_POST['mobile']);
	$owner_or_tenant = mysqli_real_escape_string($dbc, $_POST['type']);
	$email = mysqli_real_escape_string($dbc, $_POST['email']);
	$username = mysqli_real_escape_string($dbc, $_POST['username']);
	$password = mysqli_real_escape_string($dbc, $_POST['password']);
	$stand = mysqli_real_escape_string($dbc, $_POST['stand']);
	$id_no = mysqli_real_escape_string($dbc, $_POST['idno']);
	$admin_id = 1;

	$time = date("h:i");
	$date = "20" . date("y/m/d");
	
	try
	{
	
	
	$queryCheck = "SELECT * FROM residence WHERE username = '$username'";
	
	$checkUser = @mysqli_query($dbc, $queryCheck);
	$numOfRows = mysqli_num_rows($checkUser);
	if ($numOfRows){
		
		//$_SESSION['userExist'] = "Username already exists in our database, please try using another username";
		//header("Location: residenceGui.php");
		
		echo '<form id="userExist" action="residenceGui.php" method="POST">
			<input type="hidden" name="userExistErrorMsg" value="User-name already exists in our database, please try using another username">
			</form>';
		
		 ?>
			  
			  <script type="text/javascript">
				document.getElementById('userExist').submit();
			  </script>
			  
			  <?php
		
		exit();
	}
	// Insert data into the residence table
	$query = "INSERT INTO residence (id_no, firstname, surname, mobile, owner_or_tenant, email, username, password) VALUES ('$id_no','$firstname','$surname','$mobile','$owner_or_tenant','$email','$username', '$password')";
	$results = @mysqli_query($dbc, $query); 
	
	// Insert data into the registration_report table
	$queryT = "INSERT INTO registration_report (date, time, admin_admin_id, residence_id_no) VALUES ('$date', '$time','$admin_id', '$id_no')";
	$results2 = @mysqli_query($dbc, $queryT);
	
	//Retrieve the required stand id from the database
	$queryStandId = "SELECT * from stands where stand_no = '$stand'";
	$resultId = mysqli_query($dbc, $queryStandId);
	$row_id = mysqli_fetch_array($resultId);
	
	$stand_id = $row_id['stand_id'];
	
	// Insert the relationship between a stand and the residence inside the stands_has_residence table
	$queryStandResident = "INSERT INTO stands_has_residence (stands_stand_id, residence_id_no) VALUES ('$stand_id', '$id_no')";
	$results3 = @mysqli_query($dbc, $queryStandResident);
	
	
	if ($results2 && $results && $results3)
	{
		//unset($_SESSION['registration']);
		//$_SESSION['registration'] = "Record for" . $firstname . " " . $surname . "Saved Successfully";
		//header("Location: residenceGui.php");
		
	echo '<form id="successMsgForm" action="residenceGui.php" method="POST">
			<input type="hidden" name="success" value="Record for '. $firstname . ' '. $surname. ' saved successfully">
		</form>';
		
		 ?>
			  
			  <script type="text/javascript">
				document.getElementById('successMsgForm').submit();
			  </script>
			  
			  <?php
		
	}else{
		echo '</br>';
		//$_SESSION['registration'] = "Error inserting data in the all 3 tables";
		//header("Location: residenceGui.php");
		
		echo '<form id="errorForm" action="residenceGui.php" method="POST">
				<input type="hidden" name="insertionError" value="Error inserting data in the all 3 tables">
			  </form>';
			  ?>
			  
			  <script type="text/javascript">
				document.getElementById('errorForm').submit();
			  </script>
			  
			  <?php
	}

	
	}
	catch(SQLException $er){
		
		echo "Error" . $er->getMessage();
	}
	
	mysqli_close($dbc);
?>

</body>
</html>