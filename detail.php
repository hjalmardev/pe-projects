<?php include('project-data.php'); ?>

<?php
	if ( isset($_GET['project']) ) {
		$current_project_id = $_GET['project'];
	}

	// echo $current_project_id;

	foreach ($project_data as $project) {
		if ( $current_project_id == $project['id'] ) {
			$detail = $project; 
		}
	}
?>

<main>
	<inner-column>
		<?php if ( isset($detail) ) { ?>
			<h1><?=$detail['title']?></h1>
	
			<?php include('site-menu.php'); ?>
		
			<picture>
				<img src="https://peprojects.dev/images/landscape.jpg" alt="$todo">
			</picture>
		
			<p>Case study<p>
		
			<?php } else { ?>
			<h2>No such project found.</h2>
		
			<p>Check the list for more projects <a href='?page=projects'>here!</a></p>
		
		<?php } ?>
	</inner-column>
</main>