<?php
require 'dbconnect.php';

		if(isset($_POST['submit'])){
			$username=$_POST['user'];
			$password=$_POST['pass'];
			$password=md5($password);

				if(!empty($username) && !empty($password))
				{
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
										session_start();
										$_SESSION['user']=$username;	
										//echo session_id();
										header("Location: index.php");
										die();
									}
									else echo 'Password Error';
								}
							}
							else echo "Invalid Username";
						}
					else echo 'Connection Error.';
				}
									
						
					
		}
	





?>
<form action="login.php" method="POST">
Username:<input type = "text"  name="user"><br><br>
Password:<input type ="password"  name="pass"><br><br>
<input value ="Log In" type="submit" name="submit">
</form>