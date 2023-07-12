<html><body>
<h1><center>Copying uploaded file</center></h1>
<?php
	$fname=$_FILES["file1"]["name"];
	$ftemp=$_FILES["file1"]["tmp_name"];
	$flag=move_uploaded_file($ftemp,"D:/$fname");
	if($flag)
	{echo "File moved successfully";}
	else
	{echo " Sorry couldn't move";}
?>
</body></html>