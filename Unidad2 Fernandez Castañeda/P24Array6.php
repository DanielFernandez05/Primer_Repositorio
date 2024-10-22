<?php
/* CBTIS 89
Programa que 
Christian Daniel Fernandez Castañeda
3°A Programación Matutino
*/
$alumnos = array('Programación'=>'Rodrigo','Contabilidad'=>'Efren','Recursos Humanos'=>'Antonio','Logistica'=>'Ulises','Arquitectura'=>'Angel');
echo "*ALUMNOS CBTIS 89*","<br>","<br>";
foreach($alumnos as $carrera=>$alumno)
{echo "El Alumno del CBTIS89 " . $alumno . " está en la carrera de " . $carrera;
echo "<br>","<br>";
}
?>