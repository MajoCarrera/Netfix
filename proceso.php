<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $genero = $_POST['sexo'];
    $gusto = $_POST['gusto'];
    $paises = $_POST['paises'];
    $plan = $_POST['plan'];
    $color = $_POST['color'];
    
    echo "<h2>Informacion recibida desde PHP</h2>";
    echo "Su nombre es:" . $nombre . "<br/>";
    echo "Su correo es:" . $correo . "<br/>";
    echo "Su Genero es:" . $genero . "<br/>";
    echo "Su preferencia es:" . $gusto . "<br/>";
    echo "Su pais es:" . $paises. "<br/>";
    echo "El plan elegido es:" . $plan . "<br/>";
    echo "Su color seleccionado es:" . $color . "<br/>";
    
    ?>
    <a href="index.html">Regresar</a>
</body>
</html>