<?php
// incluir la carpeta que contiene los datos a utilizar
include("CargaDatos.php");
$datos = cargarDatos();
$landers = $datos['Landers'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="presentacion.css" />
    <title>Landers</title>
</head>
<body>
    <h1>Landers</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fuel Depósito</th>
            <th>Resistencia Tren</th>
        </tr>
        <?php foreach ($landers as $lander): ?>
        <tr>
            <td><?php echo $lander->getId(); ?></td>
            <td><?php echo $lander->getNombre(); ?></td>
            <td><?php echo $lander->getFuel_Deposito(); ?></td>
            <td><?php echo $lander->getRes_tren(); ?></td>
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
