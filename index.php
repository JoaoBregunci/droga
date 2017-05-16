<?php
	$names = array();
	exec('ls frases', $names);
	$file = fopen("frases/".$names[array_rand($names)], r);
	echo htmlentities("Droga é " . fgets($file));
	fclose($file);
?>
