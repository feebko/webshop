<?php
include 'dbconnect.php';
$id=rand(1,4);
$array=array();
$sql="SELECT * FROM items WHERE id = '$id'";
$result=$conn->query($sql);
		while($row=$result->fetch_assoc())
		{
			$array[]=$row;
		}
		echo json_encode($array);
?>