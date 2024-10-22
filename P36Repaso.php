<?php
/* CBTIS 89
Programa que imprime los productos de un minisupe y lo muestra por categorias con un ciclo for
Christian Daniel Fernandez Castañeda
3°A Programación Matutino
*/
$categorias = [
    "MINISUPER PROVIDENCIA" => [
        '$40' => 'Papa',
        '$20' => 'Tomate',
        '$40' => 'Zanahoria',
        '$15' => 'Lechuga',
        '$25' => 'Coliflor',
        '$30' => 'Brocoli',
        '$45' => 'Huevo'
    ],
    "CARNICERÍA" => [
        '$200' => 'Pulpa',
        '$230' => 'Carne de Res',
        '$150' => 'Carne de Puerco',
        '$60' => 'Manteca',
        '$124' => 'Pata',
        '$130' => 'Cachete',
        '$260' => 'Carne Molida'
    ],
    "PRODUCTOS PARA EL HOGAR" => [
        '$20' => 'Velas',
        '$300' => 'Adornos Navideños',
        '$600' => 'Silla Chica',
        '$900' => 'Mesa Grande',
        '$1100' => 'Puerta de Madera',
        '$2200' => 'Sartenes',
        '$75' => 'Desodorante 200ml',
        '$30' => 'Pasta de Dientes',
        '$55' => 'Crema para Peinar'
    ],
    "ELECTRÓNICOS" => [
        '$2000' => 'Licuadora',
        '$34000' => 'iPhone 16',
        '$15000' => 'MacBook',
        '$2500' => 'Monitor Acer',
        '$6000' => 'Laptop HP',
        '$1500' => 'Teclado inalámbrico',
        '$20000' => 'MiniSplit',
        '$150' => 'Memoria USB 74GB',
        '$6000' => 'Computador Acer'
    ]
];

foreach ($categorias as $categoria => $productos) {
    echo "*$categoria*<br><br>";
    foreach ($productos as $precio => $producto) {
        echo "El " . ($categoria === "MINISUPER PROVIDENCIA" ? "kilo de" : "Producto") . " " . $producto . " cuesta " . $precio . "<br><br>";
    }
}
?>