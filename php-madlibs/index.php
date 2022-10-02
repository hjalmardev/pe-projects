<html>
	<head>
		<style>
			h2 {
				color: gold;
			}

			blockquote {
				color:  blue;
			}
		</style>
	</head>

	<body>
		<?php
			$species = "Hobbit";
			$firstName = "Tom";
			$lastName = "Bombadill";

			// Echo a string
			echo "<h1>Hello, " . $species . "!<h1>";

			// Echo a number
			echo "<p>" . 42 . "</p>";

			// Echo a number + number
			echo "<p>" . (98 + 1) . "</p>";

			// echo a string + a number
			echo "<p>" . $firstName . " is " . 2342 . "</p>";

			// concatenate a few strings together (and echo them!)
			echo "<h2>Your first name is " . $firstName . " and last name is " . $lastName . "</h2>";

			// concatenate a string and a number and see what happens
			// HTTP 500 Error?

			// echo a longer sentence with strings and with two numbers added together
			echo "<h2>Your first name is " . $firstName . " and last name is " . $lastName . " and you are " . (2341 + 1) . " years old</h2>";

			$whosTom = "https://en.wikipedia.org/wiki/Tom_Bombadil";

			//I get HTTP 500 Error when trying to create one variable out of two other variables

			//Madlib variables and first sentence
			$noun = "brain";
			$pluralNoun1 = "neurons";
			$pluralNoun2 = "cats";
			$verb1 = "destroy";
			$verb2 = "shoot lazers";
			$bodyPart = "molecules";
			$adjective1 = "holographic";
			$adjective2 = "magical";

			echo "<p>Today, every student has a computer small enough to fit into their " . $noun . ". You can solve any math problem by simply pushing the computer’s little " . $pluralNoun1 . ".</p>"

		?>
		<p>Computers can add, multiply, divide, and <?php echo $verb1; ?>. They can also <?php echo $verb2; ?> better than a human.</p>

		<p>Some computers have their own <?=$bodyPart?>. Other’s have a <?=$adjective1?> screen that shows all kinds of <?=$pluralNoun2?> and <?=$adjective2?> figures.</p>

		<!-- Make a variable and echo it inside of a paragraph -->
		<blockquote>Old <?php echo $firstName; ?> <?php echo $lastName; ?>  was a merry fellow; bright blue his jacket was and his boots were yellow, green were his girdle and his breeches all of leather; he wore in his tall hat a swan-wing feather. He lived up under Hill, where the Withywindle ran from a grassy well down into the dingle.</blockquote>

		<!-- Make a variable containing a URL and echo the URL inside of an anchor link -->
		<a href="<?php echo $whosTom; ?>">Who is Tom Bombadill?</a>

		


	</body>
</html>