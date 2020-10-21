<?php
$tabla = array(
    "ACCION" => array("GTA","Assasin's Creed","Borderlands"),
    "AVENTURA" => array("Crash Bandidcot","Minecraft","Mulaka"),
    "DEPORTES" => array("Fifa 2020","PES 2020","Tony Hawk's Pro Skate")
);

$categorias = array_keys($tabla);
?>

<table border="1">
   <?php 
   require_once ''; 'encabezados.php';
   require_once 'primera.php';
   require_once 'segunda.php';
   require_once 'tercera.php';
   ?> 
</table>