<html>
	<head>
			<style>
				html {
					background-color: #ffe201;
				}

				body {
					padding: 20px;
				}

				header {
					border-bottom: 1px solid black;
				}

				h1 {
					font-family: Helvetica;
					font-size: 2em;
					text-transform: uppercase;
				}

				h2 {
					font-family: inherit;
					font-weight: 100;
					font-size: 1.2em;
				}

				p {
					font-family: inherit;
					font-size: 1.2em;
					max-width: 67ch;

				}

				h2 + p {
					line-height: 0;
				}

				ul {
					display: flex;
					flex-direction: column;
					list-style: none;
					padding: 0px;
					gap: 15px;
				}

				monster-card {
					display: flex;
					align-items: center;
					gap: 10px;
				}

				img {
					border-radius: 50%;
					overflow: hidden;
				}

				.adopted {
					filter: grayscale(1)
				}
			</style>
	</head>

	<header>
		<h1>Save-a-Monster</h1>

		<p>Hello! Thank you for visiting our site. We are "Save-a-Monster" and this is the local San Juan chapter. To inquire about our monsters, new owner checklists, or other support please call: 787.123.4567</p>
	</header>

	<body>
	</body>
</html>


<?php

	$cody = [
		"id" => 1856,
		"name" => "Codey",
		"favoriteFood" => "Mountain Dew Code Red",
		"age" => 7,
		"adopted" => true,
		"portrait" => "images/codey.jpg",
	];

	$lima = [
		"id" => 1256,
		"name" => "Limabean",
		"favoriteFood" => "Lima beans",
		"age" => 4,
		"adopted" => false,
		"portrait" => "images/lima.jpg",
	];

	$reads = [
		"id" => 764,
		"name" => "Miss Reads-a-Lot",
		"favoriteFood" => "Madeline cookies and tea",
		"age" => 9,
		"adopted" => true,
		"portrait" => "images/reads.jpg",
	];

	$fragoo = [
		"id" => 2345,
		"name" => "Fragoo",
		"favoriteFood" => "Watermelon",
		"age" => 3,
		"adopted" => false,
		"portrait" => "images/fragoo.jpg",
	];

	$banana = [
		"id" => 342,
		"name" => "Mr. Banana",
		"favoriteFood" => "Bananas",
		"age" => 5,
		"adopted" => true,
		"portrait" => "images/banana.jpg",
	];

	$orangina = [
		"id" => 6544,
		"name" => "Orangina",
		"favoriteFood" => "Oranges",
		"age" => 2,
		"adopted" => false,
		"portrait" => "images/orangina.jpg",
	];

	$shadow = [
		"id" => 1232,
		"name" => "Shadow",
		"favoriteFood" => "Plums",
		"age" => 4,
		"adopted" => false,
		"portrait" => "images/shadow.jpg",
	];

	echo "<ul>"; 

	$monsters = [$cody, $lima, $reads, $fragoo, $banana, $orangina, $shadow];

	// Sets human-readable status message
	foreach ($monsters as $monster) {
		$id = $monster["id"];
		$name = $monster["name"];
		$age = $monster["age"];
		// $story = "My favorite food is " . $monster["favoriteFood"] . " and I am " . $monster["age"] . " years old";
		$portrait = $monster["portrait"];
		$status = $monster["adopted"];


		if ($status == 1) {
			$status = "Adopted";
		} else {
			$status = "Available!";
		}

		echo "<li class='monster'>";

		echo
			"<monster-card id='" . $id . "'>" . 
				"<picture class='portrait'>" . 
					"<img class ='" . $status . "' src='" . $portrait . "' width='150'>" .
				"</picture>" .

				"<div class='text'>" . 
					"<h2 class='name'>" . $name . "</h2>" .

					"<p class='age'>Age: " . $age . "</p>" .
					"<p class='status'>" . $status . "</p>" .
				"</div>" .
			"</monster-card>";

		echo "</li>";
	}

echo "</ul>";