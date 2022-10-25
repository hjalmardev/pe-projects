<?php

$weight = 0;
$berries = 0;

if ( isset($_POST["submitted"]) ) {
	
	if ( isset($_POST["weight"]) ) {
		if ( $_POST["weight"] >= 1) {
			$weight = $_POST["weight"];
		}
	}

	$total = floatval($weight) / 2;

	echo "<p class='feedback'>" . "Drink " . "$total" . " oz. a day" . "</p>";
}

?>

<form method='POST'>

	<p>Want to know how much water to drink daily? A common rule-of-thumb is half your weight in ounces. Write down your weight below and it will be divided in half.</p>

	<div class='field'>
		<label>Your weight (in pounds)</label>
		<input type='number' name='weight' value='100'>
	</div>

	<button type='submit' name='submitted'>
		Calculate
	</button>

</form>