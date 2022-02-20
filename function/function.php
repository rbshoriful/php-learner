<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Function - PHP </title>
</head>
<body>
	<?php
		// Arithmetic operators
	// And --- Both X and Y are true
	// && --- Both X and Y are true
	// Or --- Either X or Y are true
	// || --- Either X or Y are true
	// Not --- Either X or Y are true, not both
	// ! --- true if X is Y is not true 
	// 1 = true - 0 = False
	// +=
	// -=
	// =++
	// =--
	//

	// conditional statement
	// if statement
	// else statement
	// else if statement
	// switch statement

 // $age = 21;
 // if($age < 20){
 // 	echo "Sorry, you are too young";
 // }
 
	// $num1 = 5;
	// $num2 = 5; 

 		// function myFunction($num1, $num2 = 20) {
 		// 	echo $num1 * $num2;
 		// }
 		// myFunction($num1, $num2);

	// function add($num1, $num2){
	// 	$result = $num1 + $num2;
	// 	return $result;
	// }
	// echo "This number is : " . add($num1, $num2);

	// $x = 10;
	// function addByValue($x) {
	// 	$x += 5; //not change
	// }
	// function addByReference(&$x) {
	// 	$x += 10; // change value
 // 	}
	// addByValue($x);
	// echo "The value is: " . $x;
	// echo "<br>";
	// addByReference($x);
	// echo "The value is: " . $x;

// $price = 100;
// $vat = 0.21;

// function calculateVat($price, $vat) {
// 	$calculatedPrice = ($price * $vat) + $price;
// 	return $calculatedPrice;
// }

// echo "Price: " . $price . "<br>";
// echo "Vat: " . $vat . "<br>";
// echo "Total Price: " . calculateVat($price, $vat);

	// $year = 2004;
	// function isLeapYear($year) {
	// 	if ($year % 400 == 0 || $year % 4 == 0) {
	// 		return true;
	// 	} else{
	// 		return false;
	// 	}
	// }
	
	// if (isLeapYear($year)) {
	// 	echo $year . " is a leap year";
	// } else {
	// 	echo $year . " is not a leap year";
	// }

	// $num1 = 10;
	// $num2 = 15;
	// function addNumbers($num1, $num2){
	// 	return $num1 - $num2;
	// }
	// echo "Calculate number : " . addNumbers($num1, $num2);

// $num1 = 10;
// $num2 = 20;
// 	function swapNumbers ($num1, $num2){
// 		$temp = $num1;
// 		$num1 = $num2;
// 		$num2 = $temp;
// 		echo "After Swapping num 1 = " . $num1 . " num 2 = " . $num2;
// 	}
// 	swapNumbers($num1, $num2);

// $num1 = 9;
// function evenOrNot($num1) {
// 	if ($num1 % 2 == 0){
// 		echo $num1 . " is even";
// 	} else {
// 		echo $num1 . " is not even";
// 	}
// }
// evenOrNot($num1);

	$num1 = 7;
	function isPrime($num1) {
		if ($num1 == 1) {
			return false;
		} else {
			for($i = 2; $i < $num1 / 2; $i++){
				if ($num1 % $i == 0){
					return false;
				}
			}
			return 1;
		}
	}
	if(isPrime($num1)){
		echo "This number is a prime";
	} else {
		echo "this number is not a prime";
	}

	?>
</body>
</html>