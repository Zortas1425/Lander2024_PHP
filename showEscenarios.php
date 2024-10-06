<?php
// incluir la carpeta que contiene los datos a utilizar
include("CargaDatos.php");
$datos = cargarDatos();
$escenarios = $datos['Escenarios'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Escenarios</title>
</head>
<body>
    <h1>Escenarios</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Gravedad</th>
            <th>Velocidad</th>
            <th>Altura</th>
        </tr>
        <?php foreach ($escenarios as $escenario): ?>
        <tr>
            <td><?php echo $escenario->getId(); ?></td>
            <td><?php echo $escenario->getnombre(); ?></td>
            <td><?php echo $escenario->getG(); ?></td>
            <td><?php echo $escenario->getVe(); ?></td>
            <td><?php echo $escenario->getHe(); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a class="button" href="index.php">Volver al inicio</a>
</body>
</html>
