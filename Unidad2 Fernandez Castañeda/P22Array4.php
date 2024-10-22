<?php
/* CBTIS 89
Programa que 
Christian Daniel Fernandez Castañeda
3°A Programación Matutino
*/
$equipo = array('Pivot'=>'Rodrigo','Ala'=>'Efren','Ala'=>'Antonio','Movedor'=>'Ulises','Pivot'=>'Angel');
echo "*SELECCION NACIONAL*","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{echo "El jugador " . $jugador . " es " . $posicion;
echo "<br>","<br>";
}
?>