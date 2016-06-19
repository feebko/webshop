<?php

include '/../dbconnect.php';
//include '../partials/header.php';
session_start();
if (isset($_POST['submit']))
    {
                            $target_dir = "../../uploads/";
                            $location = "../../uploads/".basename($_FILES['fileupload']['name']);
                            $target_file = mysqli_real_escape_string($conn,$target_dir . basename($_FILES['fileupload']['name']));
                             $name = mysqli_real_escape_string($conn,$_POST['name']);
                            $description = mysqli_real_escape_string($conn,$_POST['description']);
                            $price = mysqli_real_escape_string($conn,$_POST['price']);
                            $category_id = mysqli_real_escape_string($conn,$_POST['category_id']);
                            $discount = mysqli_real_escape_string($conn,$_POST['discount']);
                            
                            if(!is_dir("../../uploads"))
                            {   
                            // it creates a dir "uploads"  .
                                mkdir("../../uploads");           
                             }

                             function savedata()
                            {
                                include '/../dbconnect.php';
                                $image_link1 = "http://".$hostname."/webshop/uploads/".basename($_FILES['fileupload']['name']);
                                $image_link2="asf";
                                $image_link3="asf";
                                $username=$_SESSION['user'];
                                $name = mysqli_real_escape_string($conn,$_POST['name']);
                                $description = mysqli_real_escape_string($conn,$_POST['description']);
                                $price = mysqli_real_escape_string($conn,$_POST['price']);
                                $category_id = mysqli_real_escape_string($conn,$_POST['category_id']);
                                $sql="SELECT * FROM merchants WHERE username='$username'";
                                $result=$conn->query($sql);
                                while($row=$result->fetch_assoc())
                                    {
                                        $merchant_id=$row['id'];
                                    }
                                $discount = mysqli_real_escape_string($conn,$_POST['discount']);
                                //$date_added=date('m/d/Y', 1299446702);
                                $sql="INSERT INTO items(name,description,category_id,price,discount,merchant_id,image_link1,image_link2,image_link3)
                                VALUES('$name','$description','$category_id','$price','$discount','$merchant_id','$image_link1','$image_link2','$image_link3')";
                                if(mysqli_query($conn,$sql))echo "Success <br><a href='upload.php'>Add more.</a>";
                                else echo "Saving Failed";                    
                            }

                            
                            if (file_exists($target_file)) 
                            {
                                    $msz = "This filename already exists.";
                            }
                            
                            else
                             {
                                  move_uploaded_file($_FILES["fileupload"]["tmp_name"],
                                  "../../uploads/" . $_FILES["fileupload"]["name"]);
                                  savedata();
                             }

                            
                                
}
?>
<html>
<body>
    <title>Add products</title>
      <link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
    <!--   <link rel="stylesheet" href="/resources/demos/style.css"> -->
</body>
            <form method="POST" enctype="multipart/form-data">
                <h2>Add Item</h2>
                <hr/>
                <div class = "form-group" >Name:<input type='text' name='name' id='name'></input></div>
                Description:<input type='text' name='description' id='description'></input>
               <br> Price:<input type='number' name='price' id='price'></input>
                Discount:<input type='number' name='discount' id='discount'></input>
               <br> Category_id:<input type='number' name='category_id' id='category_id'</input>
                <div class="form-group">
                <span class="btn btn-default btn-file">Choose file<input type="file" name="fileupload">
                </span>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <hr/>  
            </form>
</html>