<?php include('project-data.php'); ?>

<header>
	<inner-column>
		<h1>Selected Works</h1>
	</inner-column>
</header>

<main>
	<inner-column>
		<p>I'm currently focused on HTML, CSS, PHP, and visual design.</p>

		<?php include('site-menu.php'); ?>

		<ol>
			<?php foreach ($project_data as $project) { ?>
				<li class='project'>
					<project-card>
						<h2 class='title'><?=$project["title"]?></h2>
						<p class='description'><?=$project["description"]?></p>
						<a href='?page=detail&project=<?=$project['id']?>'><?=$project['link']?></a>
					</project-card>
				</li>
			<?php } ?>
		</ol>
	</inner-column>
</main>