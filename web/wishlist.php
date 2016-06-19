<?php
include 'dbconnect.php';
$item_id=$_GET['item_id'];
$topic=$_GET['topic'];
session_start();
if(!isset($_SESSION['user'])) header("Location: login.php");
else
	{
		$username=$_SESSION['user'];
		$sql="SELECT id from customers where username='$username'";
		$user_id=0;
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc())
		{
			$user_id=$row['id'];	
		}

		switch ($topic) {
			case 'add':
				$sql_cart="INSERT INTO wishlist(user_id,item_id) VALUES ('$user_id','$item_id')";
				$conn->query($sql_cart);
				break;
			case 'remove':
				$sql_cart="DELETE FROM wishlist WHERE user_id='$user_id' AND item_id='$item_id'";
				$conn->query($sql_cart);
				break;
			
			default:
				# code...
				break;
		}
	}
?>