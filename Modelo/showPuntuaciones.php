<?php
// incluir la carpeta que contiene los datos a utilizar
include("CargaDatos.php");
$datos = cargarDatos();
$puntuaciones = $datos["Puntuaciones"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Puntuaciones</title>
</head>
<body>
    <h1>Puntuaciones</h1>
    <table>
        <tr>
            <th>ID Usuario</th>
            <th>Tiempo</th>
            <th>Fuel</th>
            <th>Fecha</th>
        </tr>
        <?php foreach ($puntuaciones as $puntuacion): ?>
        <tr>
            <td><?php echo $puntuacion->getId_Usuario(); ?></td>
            <td><?php echo $puntuacion->getTiempo(); ?></td>
            <td><?php echo $puntuacion->getFuel(); ?></td>
            <td><?php echo $puntuacion->getFecha(); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a class="button" href="index.php">Volver al inicio</a>
</body>
</html>
