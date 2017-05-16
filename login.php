<html>
<head>
	<title>Login processing</title>
</head>

<body>
<?php
// Start A Session
session_start();

require_once('iconnect.php');

	$username = mysqli_real_escape_string($dbc, $_POST['username']);
	$password = mysqli_real_escape_string($dbc, $_POST['password']);
	
	$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	
	$results = @mysqli_query($dbc, $query);
	$numOfRows = mysqli_num_rows($results);
	
	if($numOfRows > 0){
		
		$row = mysqli_fetch_array($results);
		//Storing the users id (primary key) from the database to a session variable with the access key 'id'
		$_SESSION['id'] = $row['admin_id'];
		//Storing the user's surname from the database to a session variable with the access key 'surname'
		$_SESSION['surname'] = $row['surname'];
		//Storing the users firstname from the database to a session variable with the access key 'name'
		$_SESSION['name'] = $row['firstname'];
		
		header('Location: residenceGui.php');
		
		
		
	}else{
		echo "User doesnt exist in the database";
	}
	
	mysqli_close($dbc);
?>
</body>
</html>