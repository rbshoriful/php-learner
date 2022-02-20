<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conditional statement</title>
</head>
<body>
	<?php
	//Conditional statement
	//If statement
	//Else statement
	//Else if statement
	//Switch statement

	// $age = 12;
	// if($age < 20){
	// 	echo 'Sorry, You are too Young!';
	// } elseif ($age > 50) {
	// 	echo "You are too old to party!";
	// }elseif ($age > 18 && $age < 21) {
	// 	echo "You are Not allowed to dirink!";
	// } else{
	// 	echo "You are old enough to go out!";
	// }
    
    // $role = "Boss";
    // switch ($role) {
    // 	case 'Visitor':
    // 		echo "Welcome Visitor";
    // 	break;
    // 	case 'Admin':
    // 		echo "Welcome Admin";
    // 	break;
    // 	case 'SuperAdmin':
    // 		echo "Welcome SupperAdmin";
    // 	break;
    // 	case 'Boss':
    // 		echo "Welcome Boss";
    // 	break;
    // 	default:
    // 		echo "User has no role";
    // }

    // $score = 29;

    // if ($score >= 90 && $score <= 100) {
    // 	echo "You received an A++! You passed the exam!";
    // } elseif ($score >= 80 && $score <= 89) {
    // 	echo "You received an A+! You passed the exam!";
    // } elseif ($score >= 70 && $score <= 79) {
    // 	echo "You received an A! You passed the exam!";
    // } elseif ($score >= 60 && $score <= 69) {
    // 	echo "You received an -A! You passed the exam!";
    // } elseif ($score >= 50 && $score <= 59) {
    // 	echo "You received an B! You passed the exam!";
    // } elseif ($score >= 40 && $score <= 49) {
    // 	echo "You received an C! You passed the exam!";
    // } elseif ($score >= 33 && $score <= 39) {
    // 	echo "You received an D! You passed the exam!";
    // } else{
    // 	echo "You received an F! You Failed this exam!";
    // }

    // $machineHours = 8000;
    // $machineAge = 6;
    // $machineFailures = 24;

    // if($machineHours >= 10000 || $machineAge > 7 || $machineFailures >= 26) {
    // 	echo "Machine needs to be replaced!";
    // } else {
    // 	echo "Machine is in perfect condition!";
    // }

    $year = 2002;
    if ($year % 400 == 0 || $year % 4 == 0) {
    	echo $year . " is a leap year";
    } else{
    	echo $year . " is not a leap year";
    }


    ?>  

</body>
</html>