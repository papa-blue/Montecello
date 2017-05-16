<!doctype html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Bookings</title>
		
	</head>
	
	<body>
	<div>
	<?php
	
		session_start();
		echo "Welcome: ". $_SESSION['name']. " ". $_SESSION['surname'].'</br></br>';
		
		if(isset($_SESSION['booking']))
		{
			echo $_SESSION['booking'];
		}
		
		if(isset($_POST['success'])){
	
			$msg = $_POST['success'];
			
			echo '<p style="position:absolute; left:356px; top:533px;">'.$msg.'</p>';
	
		}
		
	?>
	
	
	</div>
		<form action="clubHouseBooking.php" method="POST">
			<label>Pick A Date: </label>
			<input type="date" name="date"/>
			<input type="submit" name="submit"/>
		
		</form>
		
		<div>
			</br></br>
			<Label>Fee: R500 per day</Label>
		</div>
	</body>
</html>