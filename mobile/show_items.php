<?php
$_SESSION['user']=$_GET['username'];
session_start();
include 'dbconnect.php';
$topic=$_GET['topic'];
$array=array();
switch ($topic) {
	case 'price':
		$lower=$_GET['l'];
		$upper=$_GET['u'];
		$sql="SELECT * FROM items WHERE price BETWEEN '$lower' AND '$upper'";
		break;

	case 'new':
		$sql="SELECT * FROM items WHERE added_date > 2016-06-23";
		break;

	case 'sale':
		$sql="SELECT * FROM items WHERE discount > 20";
		break;

	case 'hot':
		$sql="SELECT * FROM items WHERE purchases > 5";
		break;
	
	default:
	
		break;
}
 if(isset($_SESSION['user']))
	{
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc())
		{
			$array[]=$row;
		}
		echo json_encode($array);
	}
 else echo "Error";
?>