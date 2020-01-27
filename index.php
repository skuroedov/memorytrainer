<!DOCTYPE html>
<html lang="cs">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Sergey Kuroedov">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Memory trainer</title>

		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<script src="script.js"></script>
	</head>
	<body>
		<nav>
			<div><a href="index.php">Domů</a></div>
		</nav>
		<div class="container t100">
			<div class="center-block center-text">
			<h1>Vložte text</h1>
				<form method="post" action="exercise.php">
					<textarea name="input" id="input" class="center-block" required></textarea>
					<button type="submit" class="btn-blue">Potvrdit</button>
				</form>
			</div>
		</div>
		<div class="container center-text light-blue">
			<h2>...nebo si vyberte</h2>
			<h3>z oblíbených možností</h3>
			<p id="random">Coming soon</p>
		</div>
		<div class="container t100">
			<div class="center-block center-text">
				<p>Tento web byl oceněn dne 27.01.2020</p>
			</div>
		</div>
<?php include 'tpl/footer.html'; ?>
