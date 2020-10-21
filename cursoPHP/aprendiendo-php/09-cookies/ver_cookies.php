<?php
// Para mostrar el valor de las cookies se usa la variable superglobal $_COOKIE

if(isset($_COOKIE["micookie"])){
    echo "<h1>".$_COOKIE["micookie"]."</h1>";
} else {
    echo "<h1>No existe la cookie micookie</h1>";
}

if(isset($_COOKIE["unyear"])){
    echo "<h1>".$_COOKIE["unyear"]."</h1>";
} else {
    echo "<h1> No existe la cookie unyear </h1>";
}
?>
<a href="crear_cookie.php">Crear cookies</a>
<a href="borrar_cookies.php">Borrar cookies</a>