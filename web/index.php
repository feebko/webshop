<?php include('partials/header_table.php');?>


<div class="row marketing">
  <div class="col-lg-12">
    <h4 align="center">Browse</h4>
    <table class="table table-bordered">

<?php
include 'dbconnect.php';
session_start();
$num_rec_per_page=3;
if (isset($_GET["page"])) 
	 {
	 $page  = $_GET["page"];
	 }
else {
	 $page=1;
	  } 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM items LIMIT $start_from, $num_rec_per_page"; 
$rs_result = $conn->query ($sql); //run the query
if(isset($_SESSION['user']))
      {
            $sql="SELECT id from customers where username='$username'";
            $user_id=0;
            $username=$_SESSION['user'];
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc())
            {
                  $user_id=$row['id'];    
            }
      }
else echo"";
?> 
<tr><td>Name</td><td>Description</td><td>Price</td><td>Discount</td>
<?php 
while ($row = $rs_result->fetch_assoc()) { 
?> 
            <tr>
            <td><?php echo "<a href='item_show.php?item_id=".$row['id']."'>".$row['name']."</a>"; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['price']; ?></td>            
            <td><?php echo $row['discount']; ?></td>                  
            <!-- <td><a href="cart.php?topic=add&item_id=<?php echo $row['id'];?>"Add to Cart </a></td>             -->
            <?php
            $item_id=$row['id'];
            if(isset($_SESSION['user']))
            {
                  $cart_sql="SELECT * from cart where user_id='$user_id' AND item_id='$item_id'";
                  $cart_result=$conn->query($cart_sql);
                  if($cart_result->num_rows>0)
                  {
                        while ($cart_row = $cart_result->fetch_assoc())
                              { 
                                    if($item_id==$cart_row['item_id']) echo "<td><a href='"."cart.php?topic=remove&item_id=".$row['id']."'>Remove from Cart </a></td>";
                              }
                  }
                 else echo "<td><a href='"."cart.php?topic=add&item_id=".$row['id']."'>Add to Cart </a></td>";
            }
            echo "<td><img HEIGHT=50 WIDTH=50 src='".$row['image_link1']."'></img></td>";
            ?>
            <!-- <td><a href="cart.php?topic=add&item_id=<?php echo $row['id'];?>">Add to Cart </a></td>             -->
            </tr>
<?php 
}; 
?> 
</table>
<?php 
$sql = "SELECT id FROM items"; 
$rs_result = $conn->query ($sql); //run the query
$total_records = $rs_result->num_rows;  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

echo "<a href='index.php?=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='index.php?page=".$i."'>".$i."</a> "; 
}; 
echo "<a href='index.php?=$total_pages'>".'>|'."</a> "; // Goto last page
?>
<?php include('partials/footer.php');?>