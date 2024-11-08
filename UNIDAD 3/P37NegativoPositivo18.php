<?php
/*CBTIS 89
Programa que acomoda numeros negativos y numeros positivos 
Christian Daniel Fernandez Castañeda 
Programacion 3° "A" TM 
*/

$arraynumeros=array(-4,8,17,-11,-3,1,20,-30,21,50,-73,-7,-10,-8);
$arraypositivos=array();
$arraynegativos=array();
$spos=0;
$sneg=0;
$longitud=count($arraynumeros);

for ($i=0; $i<$longitud;$i++)
{
 if ($arraynumeros[$i]>=0)
 {$arraypositivo[$i]=$arraynumeros[$i];}
 else 
 {$arraynegativo[$i]=$arraynumeros[$i];}	
}
echo "POSITIVOS";
echo"<br>";
foreach($arraypositivo as $positivo)
	{echo$positivo;
		echo "<br>";
	}
	echo "<br>";
	echo "La suma de los positivos";
	echo"<br>";
	foreach($arraypositivo as $positivo)
		{$spos=$spos+$positivo;}
	echo$spos;
	echo"<p>";

	echo "NEGATIVOS";
	echo"<br>";

	foreach($arraynegativos as $negativos)
		{echo$negativo;
			echo "<br>";
		}

		echo"<br>";
		echo"La suma de los negativos ";
		foreach($arraynegativos as $negativos)
			{$sneg=$sneg+$negativo;}
		echo$sneg;
		echo"<br>";

		?>