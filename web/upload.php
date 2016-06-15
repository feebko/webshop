<?php

include 'dbconnect.php';

if (isset($_POST['submit']))
    {
                            $target_dir = "/../uploads/";
                            $location = "/../uploads/".basename($_FILES['fileupload']['name']);
                            $target_file = mysqli_real_escape_string($conn,$target_dir . basename($_FILES['fileupload']['name']));
                            $faculty = mysqli_real_escape_string($conn,$_POST['faculty']);
                            $sub = mysqli_real_escape_string($conn,$_POST['subject']);
                            
                            if(!is_dir("/../uploads"))
                            {   
                            // it creates a dir "uploads"  .
                                mkdir("/../uploads");           
                             }

                             function savedata()
                            {

                            // $location = "uploads/".basename($_FILES['fileupload']['name']);
                            // $faculty = mysqli_real_escape_string($_POST['faculty']);
                            // $sub = mysqli_real_escape_string($conn,$_POST['subject']);
                            // $sql = "insert into files(filelocation,faculty,subject) VALUES('$location','$faculty','$sub')";
                            // $query = mysqli_query($sql); 

                            //     if ($query) {
                            //                 echo "<script>
                            //                     window.location.href='browse.php';
                            //                     alert('Your file is successfully uploaded.');
                            //                     </script>";
                            //                 }       
                            //     else{
                            //         $msz = "<br/>Something went wrong while uploading. Please retry.";
                            //         }   
                            }

                            
                            if (file_exists($target_file)) 
                            {
                                    $msz = "This filename already exists.";
                            }
                            
                            else
                             {
                                  move_uploaded_file($_FILES["fileupload"]["tmp_name"],
                                  "/../uploads/" . $_FILES["fileupload"]["name"]);
                                  savedata();
                             }

                            
                                
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NotesCafe | Ask, Browse and Share </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">NotesCafe</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="upload.php">Upload</a></li>
                <li><a href="browse.php">Browse</a></li>
                <li><a href="signin.php">Signin</a></li>
                <li><a href="discuss.php">Q & A</a></li>
                  
            </ul>
           <!-- </div> -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    

    <!-- Page Content -->
    <div class="container margin-top">

        <div class="col-md-5 col-md-offset-3 v-cent">
            <form method="POST" enctype="multipart/form-data">
                <h2>Upload File</h2>
                <hr/>
                <div class="form-group">
                    <label for="inputText">Faculty</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Faculty related to file" name="faculty">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Subject</label>
                    <input type="text" class="form-control" id="text" placeholder="Subject related to file" name="subject">
                </div>
                <div class="form-group">
                <span class="btn btn-default btn-file">Choose file<input type="file" name="fileupload">
                </span>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <hr/>
                
                            <?php 
                                if (isset($msz)) {
                             ?>
                                    <div class="alert alert-warning">
                                        <strong>
                                           <?php echo $msz;?>
                                        </strong>
                                    </div>
                                <?php }
                            ?>
                           
            </form>
        </div>
    </div>


       

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center">Copyright &copy; NotesCafe.com 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
