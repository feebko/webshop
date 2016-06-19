<?php

require '/../dbconnect.php';
if(isset($_POST['register']))
{
			$name=$_POST['name'];
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
			//username,email ra phone  check garna sql code haru lekheko
			$ucheck_sql = "SELECT password FROM merchants WHERE username='$username'";
			$uresult=$conn->query($ucheck_sql);

			$echeck_sql = "SELECT password FROM merchants WHERE email='$email'";
			$eresult=$conn->query($echeck_sql);

			$phcheck_sql = "SELECT password FROM merchants WHERE phone='$phone'";
			$phresult=$conn->query($phcheck_sql);
			
				if(!empty($name)&&!empty($username)&&!empty($password) &&!empty($repass) &&!empty($email)&&!empty($phone) &&!empty($district) &&!empty($vdcmun) &&!empty($address1))
				{ 
						if($uresult->num_rows>0)echo "username exists";
						else if($eresult->num_rows>0)echo "email exists";
						else if($phresult->num_rows>0)echo "phone exists";
						else
						{
									if($password==$repass){
										$sql2 = "insert into merchants(name,username,password,email,phone,district,vdcmun,address1,address2) VALUES ('$name','$username','$password','$email','$phone','$district','$vdcmun','$address1','$address2')";
										if(mysqli_query($conn,$sql2))
											{
												echo 'Registered Success';
												header("Location: login.php");
												die();
											}
										else echo "Registration Failed";
									}
									else{
									echo "Password Mismatch";
								}
						}
				}
				else
				{
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

