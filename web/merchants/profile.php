<?php
require '/../dbconnect.php';
$username = $_GET['username'];
$sql="SELECT * FROM merchants WHERE username='$username'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{
	echo "<br> Merchant ID: ".$row['id'];
	echo "<br> Merchant Name: ".$row['name'];
	echo "<br> Merchant Phone : ".$row['phone'];
	echo "<br> Merchant Address : ".$row['address2'].",".$row['address1'].",".$row['vdcmun'].",".$row['district'];
}

?>