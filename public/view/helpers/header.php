<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="/assets/images/icon.png" />
	<link rel="manifest" href="/public/manifest.json">
	<meta name="theme-color" content="#424549" />

	<script src="/public/js/utils.js" type="text/javascript"></script>
	<script src="/public/js/navbar.js" type="text/javascript"></script>
	<script src="/public/js/popup.js" type="text/javascript"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/public/styles/header/header.css">
	<link rel="stylesheet" href="/public/styles/generics/generics.css">
	<link rel="stylesheet" href="/public/styles/popup/popup.css">
	<title><?= $title ?></title>
</head>

<body>

	<div id="dark"></div>

	<header id="header">
		<nav class="first-header">
			<img id="navicon" src="/assets/images/navicon.webp" alt="navicon" loading="lazy" onclick="show_navbar()">
			<a id="page-name"><?= $title ?></a>

			<div id="account">
				<a id="username">
					<?= htmlspecialchars($_SESSION['username'] ?? '') ?>
				</a>
				<a href="/app/logout">
					<img id="exit_icon" src="/assets/images/exit.png" alt="exit" width="50" height="50" loading="lazy">
				</a>
			</div>
		</nav>
	</header>

	<div class="corner-back"></div>
	<ul id="side-menu">
		<div class="corner"></div>
		<li><a href="/app/home">Overview</a></li>
		<li><a href="/app/accounts">Accounts</a></li>
		<li><a href="/app/budget">Budget</a></li>
		<li><a href="/app/analytics">Analytics</a></li>
		<li><a href="/app/operations">Operations</a></li>
		<li><a href="/app/verification">Verification</a></li>
		<li><a href="/app/events">Events</a></li>
		<li><a id="settings-menu" href="/app/settings"><span class="material-icons">settings</span></a></li>
</ul>

<img id="loading-gif" src="/assets/images/load.gif" alt="loading">