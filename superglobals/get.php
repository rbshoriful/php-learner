<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Get </title>
</head>
<body>
	<?php 
 		//GET 
		// Data eill be visibein the URL
	// if(isset($_GET)) {
	// 	echo $_GET['name'] . $_GET['password'];
	// }
	// echo "<br>";
	// print_r($_GET);

	?>
	<form action="get.php" method="get">
		<input type="text" name="name">
		<input type="password" name="password">
		<button type="submit">Submit</button>
	</form>
</body>
</html>