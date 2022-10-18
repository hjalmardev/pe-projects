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

			p + p {
				padding: 10px 0px;
			}
		</style>
	</head>

	<body>
		<h1>Pepe's Pizzeria</h1>

		<?php
			$allergyDairy = true;
			$allergyNuts = false;
			$allergyGarlic = true;


			if ($allergyDairy == true) {
				echo "<p>All our pizzas can have dairy-free Daiya cheese. Would you like this replacement?</p>";
			} else {
				echo "<p>What kind of cheese would you like? 1) American, 2) Swiss, or 3) Munster?</p>";
			}

			if ($allergyNuts == true) {
				echo "<p>All our pizzas can be made in a separate, nut free kitchen area. Can you wait an extra 20min. of prep time?</p>";
			} else {
				echo "<p>Thank you for ordering!</p>";
			}

			if ($allergyGarlic == true) {
				echo "<p>All our pizzas, sauces, and even the store's AC has garlic. We don't care you have terrible reflux. Are you <strong>sure</strong> you're not a vampire?</p>";
			} else {
				echo "<p>Thank you for ordering!</p>";
			}
		?>

	</body>
</html>