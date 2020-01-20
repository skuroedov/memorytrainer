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
			<div class="center-block">
				<div class="text">
					<?php
					if(isset($_POST) && !empty($_POST['input'])) {
						$input = htmlspecialchars($_POST['input']);
						$original = explode(' ', $input);
						$correct = 0;
						$max = 0;
						foreach($_POST as $key => $value) {
							if(substr($key, 0, 1) == 's') {
								$max++;
								$num = substr($key, 1);
								preg_match('/([a-žA-Ž]+)/', $original[$num], $match);
								if(strtolower($value) == strtolower($match[1])) {
									$original[$num] = str_replace($match[1], "<span class='correct'>{$value}</span>", $original[$num]);
									$correct++;
								} else {
									$original[$num] = str_replace($match[1], "<span class='wrong'>{$value}</span> <b>{$match[1]}</b>", $original[$num]);
								}
							}
						}
						echo nl2br(join(' ', $original));
						$percentage = round(($correct/$max)*100);
						echo "<h2>Výsledek: {$correct}/{$max} ({$percentage} %)</h2>";
					} else header('Location: index.php');
					?>
					<form action="exercise.php" method="post"><input type="hidden" value="<?=$input?>"><button type="submit" class="btn-blue">Zkusit znovu</button></form>
					<a href="index.php"><button class="btn-blue">Vložit jiný text</button></a>
				</div>
			</div>
		</div>
	</body>
</html>
