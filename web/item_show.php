<?php
include 'dbconnect.php';
include 'partials/header_table.php';
$id=$_GET['item_id'];
$array=array();
$sql="SELECT * FROM items WHERE id='$id'";
 // if(isset($_SESSION['user']))
	// {
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
?>
<div class="row marketing">
  <div class="col-lg-12">
    <table class="table table-bordered">
		<tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo "Rs.".$row['price']."/-"; ?></td>            
            <td><?php echo $row['discount']."% OFF"; ?></td> 
           
        </tr>
        <br><a class='btn btn-success' align='right' href='cart.php'>Add to cart</a><br>
        <tr>
	        <div class="header clearfix">
		        <img height=500 src="<?php echo $row['image_link1']?>"></img>
	       	</div>
        </tr>
     </table>
		
