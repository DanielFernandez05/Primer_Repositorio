<?php
/* CBTIS 89
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Christian Daniel Fernandez Castañeda
3°A Programación Matutino
*/
$nombre = "Anna";
$array = array(1, 2, 3, "casa", $nombre);
//Se obtiene el numero de elementos

$longitud = count($array);

//Recorre todos los elementos

for($i=0; $i<$longitud; $i++)
	{ //Se obtiene el valor de cada elemento 
		echo $array[$i];
		echo "<br>";
	}
	?>