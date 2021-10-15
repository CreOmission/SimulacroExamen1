<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio2</title>	
</head>
<body>
	<!-- Hacer una función que se llame “sinduplicados” en php que recibe un parámetro con el nombre $numeros. Este parámetro es un array indexado que contiene números. Comprobar que el tamaño del array es 10 o menos, en caso de no cumplir esta condición devolver error. Aplicar al array la función array_unique que devuelve el array sin duplicados y devolver el resultado de la suma de los números.  -->
	<?php
	//	$hola = [1,2,0,1,2,3,3,3,3,3,3,3,3,3];
	//	sinduplicados($hola);
		function sinduplicados($numeros){
			//$numeros es un array indexado con numeros

			//primero comprobar tamaño
			if(!(sizeof($numeros)<=10)){
				echo "Error.";
			}else{
			$res = 0;
			$numPreparados = array_unique($numeros);
			foreach ($numPreparados as $value) {
				$res += $value;
			}
			echo "$res";
			}
			

		}
	?>
</body>
</html>