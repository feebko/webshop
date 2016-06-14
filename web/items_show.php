<?php
include 'dbconnect.php';
$sql="SELECT * FROM items";
$result=$conn->query($sql);
echo "<table border=1>"
while($row=$result->fetch_assoc())
{

}
echo "</table>"
?>