<?php

$firstName = '';

if ( isset($_POST["submitted"]) ) {
	
	if ( isset($_POST["firstName"]) ) {
		$firstName = $_POST["firstName"];
	}

	echo "<p class='feedback'>" . "Hello, " . "$firstName" . ", nice to meet you!" . "</p>";
}

?>

<form method='POST'>

	<div class='field'>
		<label>What is your name?</label>
		<input type='text' name='firstName' value='Juan Doe'>
	</div>

	<button type='submit' name='submitted'>
		Introduce yourself!
	</button>

</form>