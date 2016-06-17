<?php
require 'dbconnect.php';
if(isset($_POST['submit'])){
	$userid=$_POST['userid'];
	
		if(!empty($userid)){
						$sql="select username from customers where email='$userid'"; 
						$query_run=mysql_query($sql);
						if(mysql_num_rows($query_run)==1){

							echo "username found";
						}
						else{
						echo "Invalid username";

						}


				}
		else{
		echo "All fields are required";
				
		}
				
}


?>
<form action="pforget.php" method="POST">
Email:<input type="text" name="userid"><br><br>
<input type="submit" value="Submit" name="submit"><br><br>
</form>