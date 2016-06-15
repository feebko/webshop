<?php
include('partials/header.php');
?>
<div class="form-group">
       <form role="form" action="uploader.php" method= "POST" enctype="multipart/form-data">
       	 <label for="file">File:</label>
		<input type="file" name="file" size="50"></input>
		<<input type="submit" name="submit" value="Upload"></input>
		</form>
    </div>

<?php
include('partials/footer.php');
?>
