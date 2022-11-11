<!doctype html>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Hjalmar's Layout Garden</title>
		<meta name='description' content='A collection of popular layouts recreated by eye and from scratch.'>
		<meta property='og:image' content='images/blue-image.png'>

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

		<!-- CSS Stylesheet -->
		<link rel='stylesheet' href='css/style.css'>

		<!-- JavaScript -->
		<script>
		var body = document.querySelector('body');

		// set up a "listener" that will 
		// listen for "clicks" (and taps) on the whole page!
		document.addEventListener('click', function(event) {

		  console.log(event.target);

		  if ( event.target.matches('.toggle') ) {
		    body.classList.toggle('small-menu-open');
		  }

		  if ( event.target.matches('a') ) {
		    alert(`I'm a link for ${event.target.textContent}`);
		  }

		});

		// the 'event' is the "click" - 
		// and really... you can call that argument whatever you want. The first argument represents the event - no matter what you call it.
		</script>
	</head>

	<body>
		<header>
			<inner-column>
				<h1>Layout Garden</h1>
		
				<p>The <em>responsive layout</em> garden is a place to grow my HTML/CSS skills by recreating "modules" from popular websites. If I can see it then I can build it!</p>
				<p>References: <a href='https://www.starbucks.com/'>Starbucks</a></p>
		
		
				<nav class='site-menu'>
					<a href='https://peprojects.dev/alpha-5/hjalmar/'>Home</a>
					<a href='https://peprojects.dev/alpha-5/hjalmar/?page=goals'>Goals</a>
					<a href='https://peprojects.dev/alpha-5/hjalmar/?page=projects'>Projects</a>
				</nav>
			</inner-column>
		</header>
		
		<main>
				<section class='mod1'>
		
					<header class="site-header">
					  
					  <nav class='logo-menu'>
		
					    <a href="#">Logo</a>
					    <a href="#">Menu</a>
					    <a href="#">Rewards</a>
					    <a href="#">Gift Cards</a>
					    
					    <button class='toggle'>MENU</button>
					  </nav>
					  
					  
					  <nav class='site-menu'>
					    <a href="#">Find a Store</a>
					    <a href="#">Sign-In</a>
					    <a href="#">Join Now</a>
					    
					    <button class='toggle corner'>CLOSE</button>
					  </nav>
		
					</header>
		
				</section>
		</main>
	</body>
</html>