<?php
$hostname = "localhost";
$user = "root";
$pass = "";
$dbname = "webshop";
$conn = new mysqli($hostname,$user,$pass,$dbname) or die("Couldn't connect!");
// $query="SELECT * FROM bct";
// $result=$conn->query($query);
// if($result->num_rows>0)
// {
// 	echo "data available";
// }
// else echo "No data available";
?>