<?php

require 'dbconnect.php';
if(isset($_POST['register']))
{
		
			$username=$_POST['username'];
			$password=$_POST['password'];
			$password=md5($password);
			$repass=$_POST['repass'];
			$repass=md5($repass);
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$district=$_POST['district'];
			$vdcmun=$_POST['vdcmun'];
			$address1=$_POST['address1'];
			$address2=$_POST['address2'];
			
				if(!empty($username)&&!empty($password) &&!empty($repass) &&!empty($email)&&!empty($phone) &&!empty($district) &&!empty($vdcmun) &&!empty($address1)){
						$sql="select username from customers where username='$username'"; 
						$query_run=mysql_query($sql);
						if(mysql_num_rows($query_run)==1){

							echo "Username Not Available";
						}
						else{
									if($password==$repass){
										$sql = "insert into customers(username,password,email,phone,district,vdcmun,address1,address2) VALUES('$username','$password','$email','$phone','$district','$vdcmun','$address1','$address2')";
						 				$query = mysql_query($sql);
												if($query){
														echo "success";
												}
												else{
													echo "failed";
												}
						

									}
									else{
									echo "Password Mismatch";

								}

						}


				}
				else{
					echo "All fields are required";
				
				}
				
				
			
}



?>
<form method="POST" action="register.php">
Name:<input type="text" id="name" name="name"><br><br>
Username:<input type="text" id="username" name="username"><br><br>
Password:<input type="password" id="password" name="password"><br><br>
Re-Enter Password:<input type="password" id="repass" name="repass"><br><br>
Email:<input type="text" id="email" name="email"><br><br>
Phone No:<input type="text" id="phone" name="phone"><br><br>
District:<input type="text" id="district" name="district"><br><br>
VDC/Municiplity:<input type="text" id="vdcmun" name="vdcmun"><br><br>
Address 1:<input type="text" id="address1" name="address1"><br><br>
Address 2:<input type="text" id="address2" name="address2"><br><br>
<input type="submit" value="Register" name='register'><br><br>
</form>

