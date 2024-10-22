<?php
/* CBTIS 89
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Christian Daniel Fernandez Castañeda
3°A Programación Matutino
*/
$venta = array('$40'=>'Papa','$20'=>'Tomate','$40'=>'Zanahoria','$15'=>'Lechuga','$25'=>'Coliflor');
echo "*FRUTERIA DEL NORTE*","<br>","<br>";
foreach($venta as $precio=>$producto)
{echo "El kilo de " . $producto . " cuesta " . $precio;
echo "<br>","<br>";
}
?>