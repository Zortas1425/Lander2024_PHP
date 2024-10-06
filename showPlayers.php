<?php
// incluir la carpeta que contiene los datos a utilizar
include("CargaDatos.php");
$datos = cargarDatos();
$jugadores = $datos['Jugadores'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Jugadores</title>
</head>
<body>
    <h1>Jugadores</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Grupo</th>
        </tr>
        <?php foreach ($jugadores as $jugador): ?>
        <tr>
            <td><?php echo $jugador->getId(); ?></td>
            <td><?php echo $jugador->getNombre(); ?></td>
            <td><?php echo $jugador->getGrupo(); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a class="button" href="index.php">Volver al inicio</a>
</body>
</html>
