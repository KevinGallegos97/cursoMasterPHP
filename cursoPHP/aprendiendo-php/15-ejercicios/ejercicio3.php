<?php
$resultado = false;
if (isset($_POST['valor1']) && isset($_POST['valor2'])) {

    if (isset($_POST['suma'])) {
        $resultado = $_POST['valor1'] + $_POST['valor2'];
    }

    if (isset($_POST['resta'])) {
        $resultado = $_POST['valor1'] - $_POST['valor2'];
    }

    if (isset($_POST['mult'])) {
        $resultado = $_POST['valor1'] * $_POST['valor2'];
    }

    if (isset($_POST['div'])) {
        $resultado = $_POST['valor1'] / $_POST['valor2'];
    }
}
?>
<!DOCTYPE HTML>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <form action="ejercicio3.php" method="POST">
            <label for="valor1">1° Valor:</label><br/>
            <input type="number" name="valor1"><br/><br/>

            <label for="valor2">2° Valor:</label><br/>
            <input type="number" name="valor2"/><br/><br/>

            <input type="submit" value="Sumar" name="suma"/>
            <input type="submit" value="Restar" name="resta"/>
            <input type="submit" value="Multiplicar" name="mult"/>
            <input type="submit" value="Dividir" name="div"/>
        </form>
        <?php
        if ($resultado != false):
            echo "<h2> El resultado es: $resultado";
        endif;
        ?>
    </body>
</html>

