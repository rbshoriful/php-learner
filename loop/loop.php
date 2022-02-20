<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loop Statement!</title>
</head>
<body>
	<?php
 		// While loop
		// Do-whitle loop
		// For loop
		// Foreach loop

		// $x = 1;
		// while ($x <= 10) {
		// 	echo $x . "<br>";
		// 	$x++;
		// }

		// $cookie = 1;
		// do {
		// 	echo "I love cookies!" . "<br>";
		// 	$cookie++;
		// } while ($cookie <= 10); 

	// for ($x=1; $x <= 10; $x++) { 
	// 	echo "The number is: " . $x;
	// 	echo "<br>";
	// }

	// $deposit = 20000;
	// $inderest = 0.02;

	// for ($years=1; $years <= 12 ; $years++) { 
	// 	$deposit += ($deposit * $inderest);
	// 	echo $years . " year is: " . $deposit;
	// 	echo "<br>";
	// }

	// $name = array("Rafikul", "Sopon", "Saiful", "Halim");

	// foreach ($name as $name){
	// 	echo "My name is " . $name;
	// 	echo "<br>";
	// }

	// $person = array("Name" => "Shoriful", "Age" => 29, "Gender" => "Male");

	// foreach ($person as $key => $value) {
	// 	echo $key . ": " . $value;
	// 	echo "<br>";
	// }

	// $x = 1;
	// $y = 10;
	// while ($x <= $y) {
	// 	$multiplication = $x * $y;
	// 	echo $x . " * " . $y . " is " . $multiplication . 
	// 	"<br>";
	// 	$x++;
	// }

	$num1 = 0;
	$num2 = 1;
	$counter = 0;

	while ($counter < 10) {
		echo ' ' . $num1;
		$num3 = $num2 + $num1;
		$num1 = $num2;
		$num2 = $num3;
		$counter++;
		echo "<br>";
	}

	?>
</body>
</html>