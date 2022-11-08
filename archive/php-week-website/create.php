<?php

	$projectData = file_get_contents('projects.json');

	var_dump($projectData);
	
	$title = "";
	$description  = "";
	$id = 0;

	$hasTitle = false;
	$hasDescription = false;

	$titleError = false;
	$descriptionError = false;

	// $todo: check if ID already exists before adding number
	if ( isset($_POST['submitted']) ) {
		
		if ( isset($_POST['title']) ) {
			$title = $_POST['title'];
			
			if ( strlen($title) > 0 ) {
				$hasTitle = true;
			
				// CREATE PROJECT
				$newProject = [
					"title" => $title,
				];

				// PHP to JSON TRANSFORM
				$projectJson = json_encode($newProject);
				// var_dump($newProject);

				// SAVE PROJECT
				file_put_contents('projects.json', $projectJson);


			} else {
				$titleError = "Please add project title.";
			}
		}
	}

	if ( isset($_POST['description']) ) {
		
		if ( isset($_POST['description']) ) {
			$description = $_POST['description'];
			
			if ( strlen($description) > 0 ) {
				$hasDescription = true;
			} else {
				$descriptionError = "Please add project description.";
			}
		}
	}

	if ( isset($_POST['submitted']) ) {
		
		if ( isset($_POST['id']) ) {
			$id = $_POST['id'];
			
			if ( intval($id) > 0 ) {
				$hasid = true;
			} else {
				$titleid = "Please add ID number.";
			}
		}
	}

	if ($hasTitle && $hasDescription) {
		$project = [
			$title => $_POST['title'],
			$description => $_POST['description'],
			$id => $_POST['id'],
		];

		// var_dump($project);
	}
?>



<h1>Add Project</h1>

<form method='POST'>
	<field>
		<label>Project Title</label>
		<input name='title' value='<?=$title?>'>
		<?php if ($titleError) { ?>
			<p class='error'><?=$titleError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Description</label>
		<input name='description' value='<?=$description?>'>
		<?php if ($descriptionError) { ?>
			<p class='error'><?=$descriptionError?></p>
		<?php } ?>
	</field>

	<field>
		<label>ID</label>
		<input type='number' name='id' min='1' value='0'>
	</field>

	<button type='submit' name='submitted'>
		Add
	</button>
</form>