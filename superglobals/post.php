<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post</title>
</head>
<body>
	<?php 
		// $_POST 
		//Collect data from the HTML form (invisible)
	if (isset($_POST)) {
		echo $_POST['name'] . ", your form is submitted";
	}
	echo "<br>";
	print_r($_POST);
	?>
		<form action="post.php" method="post">
			<input type="text" name="name">
			<input type="text" name="age">
			<button type="submit">Submit</button>
		</form>
</body>
</html>