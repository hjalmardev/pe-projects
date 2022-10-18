<html>
	<head>
		<style>
			html {
				background-color: cornsilk;
			}

			h1 {
				font-family: Arial;
				color: red;
			}

			li {
				text-transform: capitalize;
			}

			strong {
				color: red;
			}

		</style>
	</head>

	<body>
		<h1>Pepe's Pizzeria: Part 2</h1>

		<?php

			$menuItems = ["pizza", "calzone", "garlic knots", "cheese sticks"];

			$ingredientsList = [
				"pepper", "cheese", "tomatoes", 
				"lettuce", "white onions", "red onions", 
				"pineapple", "garlic", "olive oil",
			];

			// Can't get it to print all items, but it's interesting to see how you can use numerical operators to specify location
			echo "<p>Thank you for choosing a <strong>" . $menuItems[0 + 1] . "</strong>! What add-ons would you like?</p>";

			$orderSummary = [
				"menuItem" => "calzone",
				"temperature" => 350,
				"dough" => "rye",
				"cheese" => "munster",
				"vegan" => false,
				"toppings" => $ingredientsList[3],
			];

		?>

		<p>We're sorry, there's no more garlic (in honor of vampire month). Our available add-ons are:</p>

		<ul>
			<li><?=$ingredientsList[0]?></li>
			<li><?=$ingredientsList[1]?></li>
			<li><?=$ingredientsList[2]?></li>
			<li><?=$ingredientsList[3]?></li>
			<li><?=$ingredientsList[4]?></li>
			<li><?=$ingredientsList[5]?></li>
			<li><?=$ingredientsList[6]?></li>
			<li><?=$ingredientsList[8]?></li>
		</ul>
	</body>
</html>