<?php

	require_once('iconnect.php');
	$query = "SELECT stands.*, stands_has_residence.* from stands JOIN stands_has_residence ON stand_id = stands_has_residence.stands_stand_id";

?>