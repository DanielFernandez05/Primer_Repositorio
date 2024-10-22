<?php
/* CBTIS 89
Programa que...
Christian Daniel Fernandez Castañeda
3°A Programación Matutino
*/
   for ($j=1;$j<=100;$j++)
   { $numeros[]=$j;}
foreach ($numeros as $valor)
{
	if ($valor % 2 == 0)
	{
		echo $valor . " ";
	}
}

?>