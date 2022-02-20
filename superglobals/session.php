<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Session </title>
</head>
<body>
	<?php 
  		//SESSION
	//Good to use for sensitive information
	//Session exists as long as the browser is open

	session_start();

	//Storing information
	$_SESSION['Name'] = "Dary";
	$_SESSION['Age'] = "24";

	echo "Hello " . $_SESSION['Name'];

	session_destroy();
	echo "Hello " . $_SESSION['Name'];
	

	?>
</body>
</html>