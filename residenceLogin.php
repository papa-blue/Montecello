<html>
<head>
	<title>Login processing</title>
</head>

<body>
<?php

session_start();

require_once('iconnect.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM residence WHERE username = '$username' AND password = '$password'";
	
	$results = @mysqli_query($dbc, $query)
	or die ("Select Query failed". mysqli_error());
	$numOfRows = mysqli_num_rows($results);
	
	if (!$results){
		
		header("Location: residenceLogin.html");
		$_SESSION['loginError'] = "The user doesn't exist in our database";
		exit();
	}
	
	if($numOfRows > 0){
		$row = mysqli_fetch_array($results);
		$_SESSION['id'] = $row['id_no'];
		$_SESSION['surname'] = $row['surname'];
		$_SESSION['name'] = $row['firstname'];
		
		
		header("Location: startBookings.php");
		
	}else{
		echo "User doesnt exist in the database";
	}
	
	mysqli_close($dbc);
?>
</body>
</html>