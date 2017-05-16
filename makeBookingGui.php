<html>
	<head>
		<title>Make Booking</title>
	</head>
	
	<body>
		<form action="makeBooking.php" method="POST">
		
			<input type="date" name="date"/>
			<input type="hidden" name="etime" value="23:53"/>
			<select name="time">
				<option value="07:00">07:00</option>
				<option value="08:00">08:00</option>
				<option value="09:00">09:00</option>
				<option value="10:00">10:00</option>
			</select>
			
			<input type="submit" name="submit" value="Create Booking"/>
		</form>
	</body>
</html>