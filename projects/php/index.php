<!doctype html>

<?php
	// Router
	$page = null;

	if ( isset($_GET['page']) ) {
		$page = $_GET['page']; // url/?page=string
	} else {
		$page = 'home'; // default page
	}
?>

<?php include('head.php'); ?>

	<body>
		<?php
		if ($page == 'home') {
			include('home.php');
		}
		if ($page == 'goals') {
			include('goals.php');
		}
		if ($page == 'projects') {
			include('projects.php');
		}
		if ($page == 'detail') {
			include('detail.php');
		}

		?>
	</body>
</html>