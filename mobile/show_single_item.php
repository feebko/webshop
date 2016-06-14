<?php
include 'dbconnect.php';
$id=$_GET['id'];
$array=array();
$sql="SELECT * FROM items WHERE id='$id'";

 // if(isset($_SESSION['user']))
	// {
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc())
		{
			$array[]=$row;
		}
		echo json_encode($array);
	// }
 // else echo "Error";
?>