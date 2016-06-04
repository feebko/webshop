<?php 
include 'dbconnect.php';
$num_rec_per_page=3;
if (isset($_GET["page"])) 
	 {
	 $page  = $_GET["page"];
	 }
else {
	 $page=1;
	  } 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM customers LIMIT $start_from, $num_rec_per_page"; 
$rs_result = $conn->query ($sql); //run the query
?> 
<table border=1>
<tr><td>Name</td><td>Phone</td></tr>
<?php 
while ($row = $rs_result->fetch_assoc()) { 
?> 
            <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>            
            </tr>
<?php 
}; 
?> 
</table>
<?php 
$sql = "SELECT * FROM customers"; 
$rs_result = $conn->query ($sql); //run the query
$total_records = $rs_result->num_rows;  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

echo "<a href='page.php?page=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='page.php?page=".$i."'>".$i."</a> "; 
}; 
echo "<a href='page.php?page=$total_pages'>".'>|'."</a> "; // Goto last page
?>