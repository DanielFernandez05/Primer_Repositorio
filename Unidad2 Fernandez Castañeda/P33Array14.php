<?php
/* CBTIS 89
Programa que...
Christian Daniel Fernandez Castañeda
3°A Programación Matutino
*/
$nombres = array("Danna", "Karen", "José", "Gerardo", "Axel", "Keira");

sort($nombres);
echo "Datos del arreglo ordenados de manera ascendente con un ciclo for<br>";
for ($i = 0; $i < count($nombres); $i++) {
	echo $nombres[$i] . "<br>";
}
array_push($nombres, "Julian", "Eduardo", "Jorge", "Noel");
array_splice($nombres, 1, 2);
rsort($nombres);
echo "<br>Datos del arreglo ordenados de manera descendente con un ciclo for<br>";
for ($i = 0; $i < count($nombres); $i++) {
	echo $nombres[$i] . "<br>";
}
echo "<br>El numero de elementos actual en el arreglo es de; " . count($nombres);
?>