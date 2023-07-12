
<?php
	$fname=$_FILES["file1"]["name"];
	$type=$_FILES["file1"]["type"];
	$size=$_FILES["file1"]["size"];
	echo "File name: $fname <br>"; 
	echo "File type: $type <br>";
	echo "File size: $size <br>";
	?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" value="Upload" />
    </form>
</body>
</html>

