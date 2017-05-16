<?php

	session_start();
	session_destroy();
	
	//redirects the page
	header('Location: login.html');
?>