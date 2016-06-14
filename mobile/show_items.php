<?php
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
		$sql="SELECT id,name,discount,price,image_link1 FROM items ";
		break;

	case 'sale':
		$sql="SELECT * FROM items WHERE discount > 20";
		break;

	case 'hot':
		$sql="SELECT * FROM items WHERE purchases > 5";
		break;

	case 'categories':
		$cat_id=$_GET['id'];
		$sql="SELECT * FROM items WHERE category_id='$cat_id'";
		break;
	
	default:
	
		break;
}
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