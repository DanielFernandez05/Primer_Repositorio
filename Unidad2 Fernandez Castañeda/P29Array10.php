<?php
$nombres = array("josé", "Alondra", "Juan", "Julian", "Axel", "Danna", "Karen", "Cesar");
$nombre = "Juan";
foreach ($nombres as $n) {
	if ($n === $nombre) {
		echo "Este nombre esta en el Array ";
	}
}
?>