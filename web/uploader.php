<?php
if($_FILES['file']['name']!="")
{
	copy($_FILES['file']['name'],"\..\uploads")or die("Couldn't upload");
}
else 
	{
		die("No File Specified");
}
?>