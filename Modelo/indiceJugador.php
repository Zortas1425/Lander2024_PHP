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
    <link rel="stylesheet" type="text/css" href="presentacion.css" />
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
    <br>
 	<br>
 	<form action = "indice.html" method="POST">
  		<input type="submit" name="Vuelta" value="Atrás">
  	</form>
</body>
</html>
