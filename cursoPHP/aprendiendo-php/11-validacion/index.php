<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion PHP</title>
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>
        <?php
            if(isset($_GET['error'])){
                $error =  $_GET['error'];
                if($error == 'faltan_valores'){
                    echo '<strong style ="color:red">Introduce todos los datos en los campos del formulario</strong>';
                }
                
                if($error == 'nombre'){
                    echo '<strong style ="color:red">Introduce el nombre correctamente</strong>';
                }
                
                if($error == 'apellidos'){
                    echo '<strong style ="color:red">Introduce el apellido(s) correctamente</strong>';
                }
                
                if($error == 'edad'){
                    echo '<strong style ="color:red">Introduce la edad correctamente</strong>';
                }
                
                if($error == 'email'){
                    echo '<strong style ="color:red">Introduce el email correctamente</strong>';
                }
                
                if($error == 'password'){
                    echo '<strong style ="color:red">Introduce una contraseña con mas de 5 letras</strong>';
                }
                
            }
        ?>
        
        <form method="POST" action="procesar_formulario.php">
            <label for="nombre">Nombre:</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br/>
            
            <label for="apellidos">Apellidos:</label><br/>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"><br/>
            
            <label for="edad">Edad:</label><br/>
            <input type="numbre" name="edad" required="required" pattern="[0-9]+"><br/>
            
            <label for="email">Email:</label><br/>
            <input type="email" name="email" required="required"><br/>
            
            <label for="pass">Contraseña:</label><br/>
            <input type="password" name="pass" required="required" minlength="5"><br/><br/>
           
            <input type="submit" value="Enviar"><br/>
        </form>
    </body>
</html>
