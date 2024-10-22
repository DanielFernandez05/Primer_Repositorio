<?php
/* CBTIS 89
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Christian Daniel Fernandez Castañeda
3°A Programación Matutino
*/
$arraynombres=array("Julian", "José", "Daniel", "Danna", "Karen", "Ander", "Tadeo", "Itzel");

$longitud = count($arraynombres);

for ($i=0; $i<$longitud; $i++)
	{echo $arraynombres[$i];
		echo "<br>";
	}
	?>