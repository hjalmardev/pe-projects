
<?php
	// you could simplify the $variables up here if you want....
	// example
	$thumbnail = $article["thumbnail"];
	// it may or may not - be more readable
?>


<article-card>

	<picture>
		<img src='<?=$thumbnail?>' loading='lazy' alt='$todo'>
	</picture>

	<article-text>
		<h2 class='attention-voice'><?=$article["heading"]?></h2>

		<p class='calm-voice'><?=$article["description"]?></p>

		<a class='link' href='#'>
			<span> Read more</span>
		</a>
	</article-text>

</article-card>
