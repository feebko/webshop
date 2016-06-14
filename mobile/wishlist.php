<?php
include 'dbconnect.php';
$topic=$_GET['topic'];
$user_id=$_GET['user_id'];
$item_id=$_GET['item_id'];
$sql0="SELECT * FROM wishlist";
if($topic=='add')
{
	$result=$conn->query($sql0);
	if($result->num_rows>0){
	while($row=$result->fetch_assoc())
		{
			if($item_id==$row['item_id']&&$user_id==$row['user_id'])
			{
				echo "already on";
			}
			else 
			{
				$sql="INSERT INTO wishlist values('$user_id','$item_id')";
				mysqli_query($conn,$sql);
			}
		}
	}
	
	
}
?>