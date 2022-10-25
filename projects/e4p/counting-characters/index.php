<?php

$phrase = null;

if ( isset($_POST["submitted"]) ) {
	
	if ( isset($_POST["phrase"]) ) {
		$phrase = $_POST["phrase"];
	}

	$trimmedPhrase = trim($phrase, '"');

	$total = strlen($trimmedPhrase);

	echo "<p class='feedback'>" . "The total number of characters in $trimmedPhrase is: $total</p>";
}

?>

<form method='POST'>

	<p>Want to know how many characters are in a word or phrase? Write it down below!</p>

	<div class='field'>
		<label>Word/phrase:</label>
		<input type='text' name='phrase' value='Spaces count, too'>
	</div>

	<button type='submit' name='submitted'>
		Find out
	</button>

</form>