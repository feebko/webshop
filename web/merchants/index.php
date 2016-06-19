<?php
require '/../dbconnect.php';
require '/../functions.php';
if ( is_session_started() === FALSE ) session_start();
if (!(isset($_SESSION['user']))) 
	{
				header("Location: login.php");
	}
else 
	{
		echo "Welcome.".$_SESSION['user'];
		echo "<br> <a href='logout.php'>Logout</a>";
	}
?>