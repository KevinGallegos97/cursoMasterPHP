<?php
/*
// Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

// Leer contenido
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido . "<br/>";
}

// Escribir
fwrite($archivo, "<br/>Soy un texto escrito desde PHP.");
// Cerrar archivo
fclose($archivo);



// Copiar un fichero
copy('fichero_texto.txt', 'fichero_copy.txt') or dio_close("Error al copiar");

// Renombrar
rename('fichero_copy.txt', 'fichero_renombrado.txt');

// Eliminar
unlink('fichero_renombrado.txt') or die('Error al borrar');
 */

if(file_exists("fichero_texto.txt")){
    echo "El archivo existe";
} else {
    echo "El archivo no existe";
}
