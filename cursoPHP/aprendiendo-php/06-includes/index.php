<?php
//Require es lo mismo que el include pero si ocurre un error la carga de la
//pagina se detiene.
//Require_once o include_once solamente carga el contenido una vez
require 'includes/cabecera.php';
?>
<!--Contenido-->
<div class="contenido">
    <h2>Esta es la pagina de inicio</h2>
    <p>Texto de prueba de un parrafo</p>
</div>
<?php
include 'includes/footer.php';
?>
        
