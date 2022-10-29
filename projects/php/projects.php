<?php include('project-data.php'); ?>

<header>
	<inner-column>
		<h1>Selected Works</h1>
	</inner-column>
</header>

<main>
	<inner-column>
		<p>I'm currently focused on html, CSS, PHP, and design.</p>

		<?php include('site-menu.php'); ?>

		<ul>
			<?php foreach ($project_data as $project) { ?>
				<li class='project'>
					<project-card>
						<p class='title'>Title: <?=$project["title"]?></p>
						<p class='description'>Description: <?=$project["description"]?></p>
						<a href='?page=detail&project=<?=$project['id']?>'>Link: <?=$project['link']?></a>
					</project-card>
				</li>
			<?php } ?>
		</ul>
	</inner-column>
</main>