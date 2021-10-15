<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio1</title>	
</head>
<body>
	<!-- generar una lista ordenada (<ol>) con números aleatorios entre 1000 y 9999. Cada elemento <li> tiene un id con el nombre li0, li1, li2, ... li9
respectivamente.  -->
	<?php
		echo "<ol>";
		for ($i=0; $i < 10; $i++) { 
			echo "<li id=\"li$i\"><br>";
			echo rand(1000, 9999);

			echo "</li>";
		}
		echo "</ol>";


	?>
</body>
</html>