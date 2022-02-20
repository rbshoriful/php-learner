<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Begener</title>
</head>
<body>
	<?php
		// Variable

		/* $name = "Shoriful";
		echo "My name is " . $name . "<br>";
		echo $name . " is 28 years old" . "<br>"; */

		$name = "Shoriful"; //valid
		$Name = "Shoriful islam"; //valid
		// $9Name = "Shoriful islam"; //Invalid
		$_9Name = "Shoriful"; //valid
		// echo $_9Name;

		// $age = 29;

		// echo "My age is {$age}" . "<br>";
		// echo 'My age is ' .$age . "<br>";
		// print "My age is " .$age . "<br>";
		// print "My age is {$age}" . "<br>";

		// Date type
		// Integer
		// Floating point or Float
		// String
		// Booleans 
		// Array
		// Object
		// Resource

		// $age = 29;
		// echo "My age is: ". $age . "<br>";
		// $price = 10.5;
		// echo "The price is:" . $price . "<br>";
		// $name = "Shoriful Islam";
		// echo "My name is ". $name . "<br>";

		// $is_true = true;
		// echo $is_true;
		// // 1 is true or 0 is false

		// echo "<br>";
		// $x = "Hello World";
		// // $x = null;
		// echo $x;

		// array
		$cars = array("BMW", "Audi", "Mercedes");
		// echo $cars[2];

		// echo "<br>";
		$myCar = array("BMW", 2016, 75.50);
		// var_dump($myCar);
		// echo "<br>";
		// echo "<br>";
		$myCar = array("BMW", 2016, 75.50);
		// print_r($myCar);
		$cars2 = array("Volbe", "Chevy");
		$cars3 = array("Tyear", "Chaka");

		$car = array_merge($cars, $cars2, $cars3);
		// echo "<br>";
		// print_r($car);	
		// echo "<br>";
		// var_dump($car);

		// Associative arrays
		$friends = array("Shoriful" =>24, "Rafikul" =>22, "Sopon" =>20);
		// var_dump($friends);
		// 		echo "<br>";
		// print_r($friends);

		foreach ($friends as $key => $value) {
			// echo " I am " . $key . " age " . $value . "<br>";
		}

		// Multidimensional Arrays

		$friends = array(
			"MyFriends" => array("Sopon", "Rafikul", "Halim"),
			"NewFriends" => array("Masum", "Montu", "Saiful")
		);
		// echo $friends ["MyFriends"][1]; 
		// echo "<br>";
		// echo $friends ["NewFriends"][1];

		// Solutions Exerises data type

		// $x = 8;
		// $y = 7;
		// $z = ($x + $y) * 5;
		// echo "The Total is " . $z;

		// $price = 100;
		// $vat = 0.21;
		// $totalPrice = ($price * $vat) + $price;

		// echo "Price:". $price ."<br>";
		// echo "VAT: ".$vat ."<br>";
		// echo "Total Price: ". $totalPrice;

		// $x = 5;
		// $y = 9;
		// $z = 5;
		// $average = ($x + $y + $z) / 3;
		// echo $average . "<br>";
		// echo number_format($average) . "<br>";
		// echo number_format($average, 2, ',', ' ') . "<br>";

		// $countries = array("Bangladesh" => "Dhaka", "India" => "Dilli", "Pakisthan" => "Islamabad", "Afgansthan" => "kabul", "Germany" => "Berlin");

		// foreach ($countries as $key => $value){
		// 	echo "The " . $key ." of Capital is " . $value;
		// 	echo "<br>";
		// }

		// $cm = 150;
		// $cmToInch = $cm * 0.39;
		// echo $cm ." centimerters is " .$cmToInch . " inch";

		// $expenses = array(50, 60, 70, 80, 90, 45, 65);
		// $totalAmount = 0;
		// $amountOfExpenses = 0;

		// foreach ($expenses as $expense){
		// 	$totalAmount = $expense + $totalAmount;
		// 	$amountOfExpenses = $amountOfExpenses + 1;
		// }
		// echo "My ". $amountOfExpenses . " biggest expensen were " . $totalAmount;

		// $weather = array("Rain", "Sunshine", "Clounds", "Hail", "Sleet", "Snow", "Wind");

		// echo "We've seen all kinds of weather this month. At the begining of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " .$weather[4];



	?>
	
</body>
</html>