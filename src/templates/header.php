<?php
	//session_set_cookie_params(0, '/', '', false, true);
	session_start();

	function generate_random_token() {
		return bin2hex(openssl_random_pseudo_bytes(32));
	}

	if (!isset($_SESSION['pre_csrf']) && !isset($_SESSION['email'])) {
		$_SESSION['pre_csrf'] = generate_random_token();
	}
?>

<!DOCTYPE html>
<html lang="pt-PT">

	<head>
		<title>LTW</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/style.css" rel="stylesheet">  <!-- Presentation: Absolute path to prevent path relative stylesheet import exploit -->   
        <link href="css/popup.css" rel="stylesheet">  <!-- Presentation: Absolute path to prevent path relative stylesheet import exploit -->

		<!-- <?php
		switch ($_SERVER["SCRIPT_NAME"]) {
			case "rent_house.php":
			?> <link href="css/form.css" rel="stylesheet"> <?php
			break;
			default:
			break;
		}
		?> -->

		<link rel="icon" href="favicon.ico">
		<link rel="shortcut icon" href="favicon.ico">
		<script src="script.js" defer></script>
	</head>

	<body>