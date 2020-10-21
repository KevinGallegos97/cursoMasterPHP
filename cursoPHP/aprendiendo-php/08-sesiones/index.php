<?php
/*
 Sesión: Almacenary persistir datos del usuario mientras que navega en un sitio web
 * hasta que cierra sesión o cierra el navegador.
 *
 */

//Iniciar la sesión 
session_start();

// Variable local
$variable_normal = "SOY UNA CADENA DE TEXTO";


// Variable de sesion
$_SESSION['variable_persistente'] = "SOY UNA SESION ACTIVA";

echo $variable_normal;
echo $_SESSION['variable_persistente'];