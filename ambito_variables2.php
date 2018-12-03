<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ambito de las variables</title>
	</head>
	<body>
	<?php
	
	contador();
	
	function contador() {
		static $a=0;
		$a++;
		echo $a;
	}
	contador();
	contador();
	contador();
	?>
	</body>
</html>