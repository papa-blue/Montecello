<html>

		<head>
			<title>Connecting</title>
		</head>
		
		<body>
<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'admin123');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'montecellodb');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('could not connect to MySql' .mysqli_connect_error());

?>
		</body>
</html>