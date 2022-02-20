<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	// Math functions
	// Ceil
	//echo ceil(1.50) . "<br>";
	// Floor
	//echo floor(1.05)  . "<br>";
	//Round
	//echo round(0.5666, 3) . "<br>";
	//echo exp(4);
	// $str = "today is a sunny day";
	// echo strlen($str);
	// $firstName = "My first name is Shoriful";
	// echo "<br>";
	// echo str_word_count($firstName);
	// $email = "info@shoriful.com";
	// echo "<br>";
	// if (strpos($email, "@")){
	// 	echo "This is valid email";
	// } else{
	// 	echo "This is a email input field!";
	// }
	// echo "<br>";
	// // Ucwords - Every First Letter
	// echo ucwords("What is your name?" . "<br>");
	// //upercase
	// echo strtoupper("What is your name?" . "<br>");
	// //lowercase
	// echo strtolower("What is your name?" . "<br>");

	// // array 
	// $personalInfo = array("Name" => "Shoriful", "Age" => 29, "City" => "Meherpur");
	// $moreInfo = array('State' => "Khulna", "Weight" => 85);
	// $personalInfo = array_merge($personalInfo, $moreInfo);

	// foreach ($personalInfo as $key => $value) {
	// 	echo $key . ": " . $value . "<br>";
	// }
	// print_r($personalInfo);
	// echo "<br>";
	// print_r(array_keys($personalInfo));
	// // only value
	// echo "<br>";
	// print_r(array_values($personalInfo));

	// $cars = array("volkswagen", "Audi", "Mercedes");
	// array_push($cars, "Volvo");
	// print_r($cars);
	// echo "<br>";
	// echo array_search("Mercedes", $cars);
	// //count
	// echo "<br>";
	// echo count($cars);

	//DATE
	// 'd' = Day 
	// 'j' = Day without zeros 
	// 'D' = Day of week (3 letters)
	// 'l' = Full day of the week 
	// 'm' = Month as a number with zeros
	// 'n' = Month as a number without zeros
	// 'M' = Month (3 letters)
	// 'F' = Full month 
	// 'y' = tow-digit yer 
	// 'Y' = Full yers

	 // echo date('d/m/y');

	 // 'g' = Hours in 12-hour format without zeros
	 // 'h' = Hours in 12-hour format with zeros
	 // 'G' = Hours in 24-hour format without zeros
	 // 'H' = Hours in 24-hour format with zeros
	 // 'a' = am/pm in lowercase
	 // 'A' = am/pm in uppercase
	 // 'i' = minutex without leading zeros 
	 // 's' = seconds without leading zeros 

	// echo date('g:i:s a');
	// date_default_timezone_set('Europe/Amsterdam');

	// //String to time
	// $time = strtotime("4:00pm February 17 2022");
	// echo "<br>";
	// echo $time;
  	
 // echo "<br>";
 // echo date('m/d/Y H:i a', $time);

	// $min = 1;
	// $max = 10;
	// echo rand($min, $max); 
	// echo "<br>";
	// echo rand(1, 6) . "<br>"; 
	// echo getrandmax();


// Solution
	// $numbers = array("Milk" => 2, "Cheese" => 4, "Water" => 3, "Clemon" => 7, "Biscute" => 5);
	// arsort($numbers);
	// print_r($numbers);

	// $targetDays = mktime(0, 0, 0, 07, 19, 2022);
	// $today = time();
	// $differenceDays = ($targetDays - $today);
	// $days = (int)($differenceDays / 86400);
	// echo "Days till next birthday: " . $days . " days!";

	// $randNumber = rand(1, 6) / 6;
	// echo $randNumber;

	// $str = "My name is Shoriful, I'm 29 years old and I live in The Bangladesh. I'm getting pretty old. I like PHP, because it's a programming language.";
	// function lowercaseCheck($str){
	// 	echo strtolower($str);
	// }
	// lowercaseCheck($str);

	// $str = "My name is Shoriful, I'm 29 years old and I live in The Bangladesh. I'm getting pretty old. I like PHP, because it's a programming language...";
	// $punctuation = 0;
	// function searchText ($str, $punctuation) {
	// 	for ($i = 0; $i < strlen($str); $i++) {
	// 		if ($str[$i] == "."){
	// 			$punctuation++;
	// 		}
	// 	}
	// 	echo "The text has " . $punctuation . " punctuation";
	// }
	// searchText($str, $punctuation);

	// $onlyNumbers = array(8, 7, 5 ,55, 44, 52 , 60);
	// echo "The lowest value is  " . min($onlyNumbers) . " and the highest value is " . max($onlyNumbers);

	// $str = "My nameis Shoriful";
	// echo str_repeat($str, 8);
	// echo "<br>";
	?>
</body>
</html>