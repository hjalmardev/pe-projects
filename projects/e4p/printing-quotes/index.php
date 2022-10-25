<?php

$trimmedQuote = null;
$trimmedPerson = null;


if ( isset($_POST["submitted"]) ) {
	
	if ( isset($_POST["quote"]) ) {
		$quote = $_POST["quote"];
	}

	if ( isset($_POST["person"]) ) {
		$person = $_POST["person"];
	}

	$trimmedQuote = trim($quote, '"');

	$trimmedPerson = trim($person, '"');

}

?>

<form method='POST'>

	<div class='field'>
		<label>What is the quote?</label>
		<input type='text' name='quote' value='Can be from anywhere'>
	</div>

	<div class='field'>
		<label>Who said it?</label>
		<input type='text' name='person' value='Can be anyone'>
	</div>

	<button type='submit' name='submitted'>
		Cite
	</button>

</form>

<div class='feedback'>
	<blockquote cite="https://www.huxley.net/bnw/four.html">
   	<p><?php echo '"' . $trimmedQuote . '"'; ?> </p> 
 	</blockquote>
 
	<figcaption><?php echo "— $trimmedPerson"; ?></figcaption>
</div>