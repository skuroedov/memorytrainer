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
			<div class="center-block text">
			<form action="check.php" method="post">
			<?php
			setlocale(LC_ALL, 'cs_CZ.UTF-8');
			if(isset($_POST) && !empty($_POST['input'])) {
				$input = htmlspecialchars($_POST['input']);
				$arr = explode(' ', $input);

				$difficulty = 5;
				for($i = 0; $i < sizeof($arr) - 1; $i += $difficulty) {
					do {
						$random = rand(0, $difficulty);
						$pos = $i + $random;
					} while($pos >= sizeof($arr) || preg_match('/(–)/', $arr[$pos]));
					$arr[$pos] = preg_replace('/([a-žA-Ž]+)/', "<input type='text' id='s{$pos}' name='s{$pos}' autocomplete='off'>", $arr[$pos]);
				}
				echo "<input type='hidden' name='input' value='{$input}'>";
				$res = nl2br(join(' ', $arr));
				echo "<div class='exercise'>{$res}</div>";
			} else header("Location: index.php");
			?>
				<div class="center-text">
				<button type="submit" class="btn-blue">Zkontrolovat</button>
				</div>
			</form>
			</div>
		</div>
	</body>
</html>