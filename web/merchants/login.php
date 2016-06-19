<head>
    <title>WEBSHOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/../assets/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="/../assets/js/bootstrap.min.js"></script>
</head>
<body>
<div>
		<p class="text-right" >
		<form class="form-inline" method='POST' action='login.php'>
  <div class="form-group">
    <label class="sr-only" for="user">Username</label>
    <input type="text" class="form-control" id="user" name="user" placeholder="Username">
  </div>
  <div class="form-group">
    <label class="sr-only" for="pass">Password</label>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
  </div>
  <div class="form-group">
  <a href="forgot_password.php">Forgot Password</a>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" id='submit' name='submit' class="btn btn-default">Sign in</button>
  </div>
  </p>
</form>
<?php
require '/../dbconnect.php';
if(isset($_POST['submit']))
{
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$password=md5($password);
	if(!empty($username) && !empty($password))
	{
	$sql = "SELECT password FROM merchants WHERE username='$username'";
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
							session_start();
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
