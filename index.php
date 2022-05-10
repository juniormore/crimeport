<?php 
include_once 'config.inc.php';

switch($_GET['mod']) {
	case 'home': {
		include 'modules/home.php';
		break;
	}
	case 'signin': {
		include 'modules/signin.php';
		break;
	}
	case 'signup': {
		include 'modules/signup.php';
		break;
	}
	default: {
		include 'modules/home.php';
		break;
	}
}

?>