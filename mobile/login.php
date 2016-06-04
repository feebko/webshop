<?php
//http://localhost/webshop/login.php?u=username&p=password
include 'dbconnect.php';
$username = $_GET['u'];
$pwd = $_GET['p'];
$password = md5($pwd);
$sql = "SELECT password FROM customers WHERE username='$username'";
if(mysqli_query($conn,$sql))
	{
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				if($password==$row['password'])
				{
					$_SESSION['user']=$username;	
					//session_id('user');
					session_start();
					//echo session_id();
					echo "1";
				}
				else echo 'password';
			}
		}
		else echo "user";
	}
else echo 'connection';
?>
