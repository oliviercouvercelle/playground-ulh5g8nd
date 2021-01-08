<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<?php
			if (!empty($argv[2])) 
				echo '<link rel="stylesheet" href="css/'.$argv[2].'">';
		?>
		<title>Titre de page</title>
	</head>
	<body>
		<?php
			include($argv[1]);
		?>
	</body>
</html>