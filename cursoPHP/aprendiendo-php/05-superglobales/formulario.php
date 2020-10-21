<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title> Formulario en PHP </title>        
    </head>
    <body>
        <h1> Formulario en PHP</h1>
        <form method="get" action="recibir.php">
            <p>
                <label> Nombre</label>
                <input type="text" name="nombre"/>
            </p>
            <p>
                <label>Apellido</label>
                <input type="text" name="apellido">
            </p>    
            
            <input type="submit" value="Enviar datos"/>
        </form>
    </body>
</html>