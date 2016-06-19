<?php
require '/../dbconnect.php';
require '/../functions.php';
if ( is_session_started() === FALSE ) session_start();
if (!(isset($_SESSION['user']))) 
	{
				header("Location: login.php");
	}

		echo "Welcome.".$_SESSION['user'];
?>
		<br> <a href='profile.php?username=<?php echo $_SESSION['user'];?>'>My Profile</a>
		<br> <a href='orders.php'>Orders</a>
		<br> <a href='upload.php'>Items</a>
		<br> <a href='statistics.php'>Statistics</a>
		<br> <a href='logout.php'>Logout</a>