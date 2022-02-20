<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File </title>
</head>
<body>
	<?php 
  		//$_Files
		//How to upload files
		//1. Upload it to the root
		//2. Directly to the database

		//enctype="multipart/form-data
		//Specitles now the form data should be encorded

		// echo $name = $_FILES["file"] ["name"] . "<br>";
		// echo $type = $_FILES['file'] ['type'] . "<br>";
		// echo $tmp_location = $_FILES['file'] ['tmp_name'] . "<br>";
		// echo $error = $_FILES['file'] ['error'] . "<br>";

	

	?>

	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="submit">Submit</button>
	</form>

	<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
	  Select image to upload:
	  <input type="file" name="fileToUpload" id="fileToUpload">
	  <input type="submit" value="Upload Image" name="submit">
	</form> -->

</body>
</html>