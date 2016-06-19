<html lang="en">
<head>
    <title>WEBSHOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
 <script src="../assets/jquery-3.0.0.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  

</head>

<body>


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Logo -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">WEBSHOP</a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>

                    <!-- drop down menu -->
                    <li class="dropdown">
                        <a href='' class="dropdown-toggle" data-toggle="dropdown">My Profile <span class="caret"></span></a>
                        <!-- <ul class="dropdown-menu">
                            <li><a href="#">Friends</a></li>
                            <li><a href="#">Photos</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul> -->
                    </li>
                </ul>

                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php">Logout</a></li>
                </ul>

            </div>

        </div>
		
    </nav>
	<?php
    require '../functions.php';
  if ( is_session_started() === FALSE ) session_start();
// if (isset($_POST['submit']))
//     {
// 	echo '<div><p class="text-left" ><form class="form-inline"><div class="form-group">
//     <label class="sr-only" for="exampleInputEmail3">Email address</label>
//     <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
//   </div>
//   <div class="form-group">
//     <label class="sr-only" for="exampleInputPassword3">Password</label>
//     <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
//   </div>
//   <div class="checkbox">
//     <label>
//       <input type="checkbox"> Remember me
//     </label>
//   </div>
//   <button type="submit" class="btn btn-default">Sign in</button>
//   </div>
//   </p>
// </form>
// 	<div class="container">

//         <h2>A complete online shopping solution</h2>

//     </div>';
// }
    ?>
