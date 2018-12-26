<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DIan Mukti</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script> -->
</head>
<body>
	<ul>
		<?php for($x = 1; $x <= 100; $x++): ?>
		<li>Ini List Ke - <?php echo $x; ?></li>
		<?php endfor; ?>
	</ul>
</body>
</html>
