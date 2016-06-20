<?php
require '/../dbconnect.php';
require '/../functions.php';
session_start();

if (!(isset($_SESSION['user']))) 
	{
		header("Location: login.php");
	}
else
	{
		$username=$_SESSION['user'];
		echo "Welcome.".$_SESSION['user'];
		//include '../partials/header.php';
	}
?>

		<br> <a href="profile.php?username=<?php echo $username;?>">My Profile</a>
		<br> <a href='orders.php'>Orders</a>
		<br> <a href='upload.php'>Items</a>
		<br> <a href='statistics.php'>Statistics</a>
		<br> <a href='logout.php'>Logout</a>