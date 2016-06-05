<?php
include 'dbconnect.php';

if(isset($_POST['login_btn']))
	{
		$username = $_POST['username'];
		$pwd = $_POST['password'];
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
						header("Location: index.php");
						die();
						//echo session_id();
						echo "1";
					}
					else echo 'password';
				}
			}
			else echo "user";
		}
	else echo 'connection';
}
?>
<form action="login.php" method="POST">
	<input type="text" name="username"></input>
	<input type="password" name="password"></input>
	<input type="submit" name="login_btn" value="Login"></input>
</form>
