<?php
	$a = 25;
	$existe = isset($a);
	echo $existe . '<br>';
	unset($a);
	$existe = isset($a);
	echo $existe . '<br>';
?>