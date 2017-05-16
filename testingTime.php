
<html>
	<head>
		<title>Testing Time</title>
	</head>


	<body>
<?php
if(isset($_POST['submit']))
{
	$stime = strtotime($_POST['stime']);
	$etime = strtotime($_POST['etime']);
	
	echo $stime;
	echo '</br>';
	echo $etime;
	echo '</br>';
	
	$timeDiff = (($etime - $stime) / 60) / 60;
	
	echo $timeDiff;
	
}
?>

	<form method="POST">
		<input type='time' name='stime'/> 
		<input type="time" name="etime"/>
		<input type="submit" value="Submit" name="submit"/>
	</form>

	</body>

</html>