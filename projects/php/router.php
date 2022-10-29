<?php
	// Router
	$page = null;

	if ( isset($_GET['page']) ) {
		$page = $_GET['page']; // url/?page=string
	} else {
		$page = 'home'; // default page
	}

	function getTemplate($page) {
		include($page . '.php');
	}