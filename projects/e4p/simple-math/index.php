<?php

$firstNumber = 0;
$secondNumber = 0;

if ( isset($_POST["submitted"]) ) {
	
	if ( isset($_POST["firstNumber"]) ) {
		$firstNumber = $_POST["firstNumber"];
	}

	if ( isset($_POST["secondNumber"]) ) {
		$secondNumber = $_POST["secondNumber"];
	}


	$sum = floatval($firstNumber) + floatval($secondNumber);

	$subtraction = floatval($firstNumber) - floatval($secondNumber);

	$multiplication = floatval($firstNumber) * floatval($secondNumber);

	echo "<p class='feedback'>" . $firstNumber . " + " . $secondNumber . " = " . $sum . "</p>";

	echo "<p class='feedback'>" . $firstNumber . " - " . $secondNumber . " = " . $subtraction . "</p>";

	echo "<p class='feedback'>" . $firstNumber . " * " . $secondNumber . " = " . $multiplication . "</p>";

	// Code to prevent DivisionByZero error
	if ( ($firstNumber <= 0) && ($secondNumber <= 0) ) {
		echo "<p>(Omitting division because you can't divide by zero)</p";
		} else {
			
			$division = floatval($firstNumber) / floatval($secondNumber);

			echo "<p class='feedback'>" . $firstNumber . " / " . $secondNumber . " = " . $division . "</p>";
		}
	}

?>

<form method='POST'>

	<p>Let's do some math!</p>

	<div class='field'>
		<label>Write down a number:</label>
		<input type='number' name='firstNumber' value='21'>
	</div>

	<div class='field'>
		<label>Write down another number:</label>
		<input type='number' name='secondNumber' value='21'>
	</div>

	<button type='submit' name='submitted'>
		Calculate
	</button>

</form>