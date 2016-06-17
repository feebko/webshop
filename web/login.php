<?php
require 'dbconnect.php';
if(isset($_POST['submit'])){
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$password=md5($password);

		if(!empty($username) && !empty($password)){
						$sql="select username from customers where username='$username' and password='$password'"; 
						$query_run=mysql_query($sql);
						if(mysql_num_rows($query_run)==1){

							echo "Welcome";
						}
						else{
									echo "Invalid username and password";

						}


				}
				else{
					echo "All fields are required";
				
				}
				
				
			
}





?>
<form action="login.php" method="POST">
Username:<input type = "text"  name="user"><br><br>
Password:<input type ="text"  name="pass"><br><br>
<input value ="Log In" type="submit" name="submit">
</form>