<?php
/*
CBTIS 89
P39Array19.php
Programa que almacena informacion de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones :
Si la persona es menor de 18 años se debe colocar un 1 en el arreglo $Grupo1 y en los otros dos colocar un 0.
Si la persona tiene 18 y 49 años se debe colocar un 1 en el arreglo $Grupo2 y en los otros 2 colocar un 0.
Si la persona tiene 50 años o mas se debe colocar un 1 en el arreglo $Grupo3, y en los otros dos un 0.

Christian Daniel Fernandez Castañeda
3°A Programación T.M 
*/
$nombre = array("Paco","Juan","Danna","Karen","Axel","Alondra");
$edad = array(15,35,80,6,69,20);
$grupo1 = array();
$grupo2 = array();
$grupo3 = array();

for($i=0;$i<=5;$i++)
	{ if ($edad[$i]<18)
		{$grupo1[$i]=1;
			$grupo2[$i]=0;
			$grupo3[$i]=0;}
			else if ($edad[$i]>=18 and $edad[$i]<=49)
				{$grupo2[$i]=1;
					$grupo1[$i]=0;
					$grupo3[$i]=0;}

					else if ($edad[$i]>=50)
						{$grupo3[$i]=1;
							$grupo1[$i]=0;
							$grupo2[$i]=0;}
						}
						echo "<br>";
						echo  "CBTIS89" . "<br>";
						echo "Nomb" . " Edad " . " Grupo1 " . " Grupo2 " . " Grupo3 " . "<br>";
						for($i=0;$i<6;$i++)
							{echo $nombre[$i]. " - - ". $edad[$i]. " - - ". $grupo1[$i]. " - - - ". $grupo2[$i]. " - - - ". $grupo3[$i]. "<br>";}
					?>