<?php
include 'dbconnect.php';
$username=$_GET['u'];
$pwd=$_GET['p'];
$phone=mysql_real_escape_string($_GET['ph']);
$email=mysql_real_escape_string($_GET['e']);
$district=mysql_real_escape_string($_GET['d']);
$city=mysql_real_escape_string($_GET['c']);
$address1=mysql_real_escape_string($_GET['a1']);
$address2=mysql_real_escape_string($_GET['a2']);
$password=md5($pwd);
$username=mysql_real_escape_string($username);

$ucheck_sql = "SELECT password FROM customers WHERE username='$username'";
$uresult=$conn->query($ucheck_sql);

$echeck_sql = "SELECT password FROM customers WHERE email='$email'";
$eresult=$conn->query($echeck_sql);

$phcheck_sql = "SELECT password FROM customers WHERE phone='$phone'";
$phresult=$conn->query($phcheck_sql);

if($uresult->num_rows>0)echo "username exists";
else if($eresult->num_rows>0)echo "email exists";
else if($phresult->num_rows>0)echo "phone exists";
else
	{
	$sql="INSERT INTO customers(username,password,email,phone,district,city,address1,address2) 
	values('$username','$password','$email','$phone','$district','$city','$address1','$address2')";
	if(mysqli_query($conn,$sql))echo '1';
	else echo "connection";
	}
//http://localhost/webshop/register.php?u=username&p=password&e=abc@abc.com&ph=9840010191&d=Kaski&c=Pokhara&a1=Lamachaur&a2=Sahardahar
//"http://localhost/webshop/register.php?u="+username+"&p="+password+"&e="+email+"&ph="+phone+"&d="+district+"&c="+city+"&a1="+address1+"&a2="+address2;
?>
