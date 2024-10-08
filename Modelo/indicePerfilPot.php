<?php
include("PerfilPot.php");

// Funcion para cargar los datos de perfilPot
function cargarDatos() {
    $perfilPot = new PerfilPot();

    $valores = [
        [0, 0.0],
        [1, 1.0],
        [2, 2.0],
        [3, 3.0],
        [4, 4.0],
        [5, 5.0],
        [6, 6.0],
        [7, 7.0],
        [8, 8.5],
        [9, 20.0],
    ];

    foreach ($valores as $valor) {
        $nivel = $valor[0];
        $valorPotencia = $valor[1];
        
        $perfilPot->setPotencia($nivel, $valorPotencia);
    }

    return $perfilPot;
}

$perfilPot = cargarDatos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="presentacion.css">
    <title>Datos de Perfil Pot</title>
</head>
<body>
    <h1>Perfil Pot</h1>
    <table>
        <tr>
            <th>Nivel</th>
            <th>Valor de Potencia</th>
        </tr>
        <?php $potencias = $perfilPot->getPotencia();
            foreach ($potencias as $nivel => $valor) : ?>
                <tr>
                    <td><?= $nivel ?></td>
                    <td><?= $valor ?></td>
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
