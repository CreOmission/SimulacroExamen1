<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio3</title>	
</head>
<body>
	<!-- Ejercicio de arrays asociativos y bucles for. Mete los siguientes datos en un array asociativo de nombre “notasAlumnos”:  

		juan notable
		pedro suficiente
		ana notable

		El nombre del alumno tiene que ser la clave del array y la nota el valor. Recorrer el array con
		un foreach para crear una tabla HTML con la primera columna los alumnos y en la segunda
		columna las notas.
	-->
	<?php
	
		$notasAlumnos = [
		//clave   //valor  	  <-- ni clave ni valor tienen nombre
	    "juan" => "notable",
	    "pedro" => "suficiente",
	    "ana" => "notable",
	    "jorge" => "sobresaliente",
	    "david" => "notable",
	    "alberto" => "suspenso",
		];


		//se crea la tabla
		echo "<table>";
		//primera fila con una primera celda alumnos y una segunda notas
		echo "<tr><th>Alumnos</th><th>Notas</th>";
		//fin primera fila
		echo "</tr>";
		//bucle
		foreach ($notasAlumnos as $animal => $notas) {
			//cada vuelta crea una fila
			echo "<tr>";
			//y una celda con el nombre de cada alumno
			echo "<td>$animal</td>";
			//y una celda con la nota
			echo "<td>$notasAlumnos[$animal]</td>";
			//se cierra
			echo "</tr>";
			
		}
		echo "</table>";
		echo "<hr>";

	?>
</body>
</html>