
<title>Insert Post</title>
<form method="POST" action="index.php">
NAME:	<input type= "TEXT" name="name"/>
DESCRIPTION:	<input type= "TEXT" name="desc"/>
PRICE:	<input type= "number" name="price"/>
<input type='submit'>
</form>
<?php
include 'dbconnect.php';
$name=$_POST['name'];
$desc=$_POST['desc'];
$price=$_POST['price'];
$sql="INSERT INTO items(name,description,price) values('$name','$desc','$price')";
$result=$conn->query($sql);
?>
	