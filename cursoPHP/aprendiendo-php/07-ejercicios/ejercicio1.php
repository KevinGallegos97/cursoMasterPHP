<?php
//Arreglo
$array = array(
    'once' => 11,
    'cincuenta' => 50,
    'tres' => 3,
    'quince' => 15,
    'cinco' => 5,
    'seis' => 6,
    'setenta' => 70,
    'ocho' => 8);

echo'<h1>Ejercicio 1</h1>';
//Recorrerlo y mostrarlo
echo '<h2>Recorrerlo y mostrarlo</h2>';
echo '<ul>';
foreach ($array as $indice){
    echo '<li>'.$indice.'</li>';
}
echo '</ul>';
echo '<br/>';


//Ordenado
echo '<h2>Ordenado</h2>';
echo '<ul>';
asort($array);
foreach ($array as $indice){
    echo '<li>'.$indice.'</li>';
}
echo '</ul>';
echo '<br/>';

//Longitud
echo '<h2>Longitud</h2>';
echo count($array);

//Buscar en array
echo '<h2>Resultado de busqueda</h2>';
$busqueda =array_search('70', $array);
echo $busqueda;


