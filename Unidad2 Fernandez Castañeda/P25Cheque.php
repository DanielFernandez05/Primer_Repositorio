<?php
/* CBTIS 89
Programa que 
Christian Daniel Fernandez Castañeda
3°A Programación Matutino
*/

$cheque=5793;
echo "El cheque vale por ",$cheque,"pesos";echo "<br>";
$B1000=floor($cheque/1000);
$cheque=$cheque%1000;echo "<br>";
echo "La cantidad de billetes de mil pesos es: ",$B1000;echo "<br>";
echo "<br>",$cheque;echo "<br>":
$B500=floor($cheque/500);
$cheque=$cheque%500;
echo "La cantidad de billetes de quinientos pesos es de: ",$B500;echo "<br>";
echo "<br>", $cheque;echo "<br>";
$B200=floor($cheque/200);
$cheque=$cheque%200;
echo "La cantidad de billetes de doscientos pesos es: ",$B200