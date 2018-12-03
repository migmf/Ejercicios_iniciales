<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ambito de las variables</title>
	</head>
	<body>
	<?php
		$a = 1;
		$b = 2;
		prueba();
		
	function prueba() {
		global $a;
		$c = $a;
		global $b;
		$c = $b;
		
		echo $c;
	}
	
	?>
	</body>
</html>