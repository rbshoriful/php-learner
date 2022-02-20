<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookie </title>
</head>
<body>
	<?php 
  		// Cookie
		// Small file that the webserver stores in the client computer

		//ARGUMENTS COOKIES
		//Name
		//Value
		//Expire
		//Path
		//Domain
		//Security

	// If you do not include an expiration date, the cookie will only be stored for the current session
		$time = time() + 86400 * 30;
		setcookie("name", "Shoriful", $time);

		print_r($_COOKIE);

		echo "<br>";

		echo $_COOKIE['name'];
	?>
</body>
</html>