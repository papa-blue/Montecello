<?php
	
	session_start();
	$description = $_POST['event'];
	
	
	if ($description == "club house")
	{
		header('Location: clubhouseBookingGui.php');
		$_SESSION['court'] = $description;
	}
	if($description == "tennis" || $description == "squash")
	{
		if ($description == "tennis")
		{
			
			$_SESSION['court'] = $description;
		}
		if($description == "squash")
		{
			
			$_SESSION['court'] = $description;
		}
		header('Location: pickDate.php');
	}
?>
