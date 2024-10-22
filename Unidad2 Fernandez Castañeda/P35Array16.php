<?php
/* CBTIS 89
Programa que...
Christian Daniel Fernandez Castañeda
3°A Programación Matutino
*/

echo "SUMA ENTRE ARREGLOS";
echo "<br>";
$array1 = array(10,8,15,20,40);
$array2 = array(5,3,7,5,30);
$arraysuma = array();
$arrayresta = array();
$arraymulti = array();
$arraydivi = array();
echo "<br>","<br>";

for($i=0; $i<$array1; $i++)

$suma = $array1+$array2;

$longitud = count($array1);
for($i=0; $i<$longitud; $i++)
{$arraysuma[$i] = $array1[$i]+$array2[$i];
$arrayresta[$i] = $array1[$i]-$array2[$i];
$arraymulti[$i] = $array1[$i]*$array2[$i];
$arraydivi[$i] = $array1[$i]/$array2[$i];
}

echo "SUMA ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]." + ".$array2[$i]." = ".$
$arraysuma[$i];
echo "<br>";
}
echo "RESTA ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]." - ".$array2[$i]." = ".$
$arrayresta[$i];
echo "<br>";
}
echo "MULTIPLICACION ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]." X ".$array2[$i]." = ".$
$arraymulti[$i];
echo "<br>";
}
echo "DIVISION ENTRE ARREGLOS <br>";
for($i=0; $i<$longitud; $i++)
	{echo $array1[$i]." % ".$array2[$i]." = ".$
$arraydivi[$i];
echo "<br>";
}
?>