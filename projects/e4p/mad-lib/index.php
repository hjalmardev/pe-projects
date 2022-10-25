<?php

$verb = null;
$adjective = null;
$noun = null;
$adverb = null;


if ( isset($_POST["submitted"]) ) {
	
	if ( isset($_POST["verb"]) ) {
		$verb = $_POST["verb"];
	}

	if ( isset($_POST["adjective"]) ) {
		$adjective = $_POST["adjective"];
	}

	if ( isset($_POST["noun"]) ) {
		$noun = $_POST["noun"];
	}

	if ( isset($_POST["adverb"]) ) {
		$adverb = $_POST["adverb"];
	}

	echo "<p class='feedback'>" . "Do you " . $verb . " your " . $adjective . ' ' . $noun . " " . $adverb . "? Fascinating!</p>";
}

?>

<form method='POST'>

	<div class='field'>
		<label>Enter a verb:</label>
		<input type='text' name='verb' value='cook'>
	</div>

	<div class='field'>
		<label>Enter an adjective:</label>
		<input type='text' name='adjective' value='orange'>
	</div>

	<div class='field'>
		<label>Enter a noun:</label>
		<input type='text' name='noun' value='pumpkin'>
	</div>

	<div class='field'>
		<label>Enter an adverb:</label>
		<input type='text' name='adverb' value='gingerly'>
	</div>

	<button type='submit' name='submitted'>
		Build a story
	</button>

</form>