<?php
	if ( isset($_POST['add']) ) {
		echo "added project";
	}


?>


<h1>Add Project</h1>

<form>
	<field>
		<label>Project Title</label>
		<input type='text'>
	</field>

	<field>
		<label>Description</label>
		<input type='text'>
	</field>

	<field>
		<!-- $todo: check if ID already exists before adding -->
		<label>ID</label>
		<input type='number'>
	</field>

	<button type='submit' name='add'>
		Add
	</button>
</form>