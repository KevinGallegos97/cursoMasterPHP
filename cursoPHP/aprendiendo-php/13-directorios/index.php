<?php

// Crear un directorio
if (!is_dir('mi_carpeta')) {
    mkdir('mi_carpeta', 077) or die('No se puede crear la carpeta');
} else {
    echo "Ya existe la carpeta";
}

// Mostrar archivos dentro de un directorio.
echo "<hr><h1>Contenido de la carpeta </h1>";
if ($gestor = opendir('./mi_carpeta')) {
    while (false != ($archivo = readdir($gestor))) {
        if ($archivo != '.' && $archivo != '..') {
            echo "$archivo<br/>";
        }
    }
}