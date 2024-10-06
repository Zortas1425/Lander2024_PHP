<!DOCTYPE html>
<html lang="es-ES">

<!-- Datos de simulación -->

	<head>
        <meta charset="utf-8">
        <meta name="Datos de simulación" content="Datos de simulación" />

        <title>Datos de simulación</title>
        <link rel="stylesheet" type="text/css" href="presentacion.css" />
    </head>

  <body>

   <h1>L A N D E R 2 0 2 4</h1>

 	<h2>Datos de simulación</h2>

 	<h3>Elija los datos de simulación a visualizar</h3>

 	<?php

 	$idds_array=array();
    $tiempo_array=array();
    $velocidad_array=array();
    $fuel_array=array();
    $distancia_array=array();
    $idsim_array=array();

	include "DatosSim.php";

    // recogemos los datos csv y creamos arrays con cada campo

    $fila=1;
        $handle = fopen("datos_sim_data.csv", "r");
            while(($datos = fgetcsv($handle, 1000, ",")) !==FALSE){
                $numero = count($datos);
               // echo "<p> $numero de campos en la linea $fila: <br /></p>\n";
                $fila++;

                    for($c=0; $c<$numero; $c=$c+6){
                        array_push($idds_array, $datos[$c]);
                       //echo $datos[$c] . "<br />\n";
                    }

                    for($c=1; $c<$numero; $c=$c+6){
                        array_push($tiempo_array, $datos[$c]);
                    }

                    for($c=2; $c<$numero; $c=$c+6){
                        array_push($velocidad_array, $datos[$c]);
                    }

                    for($c=3; $c<$numero; $c=$c+6){
                        array_push($fuel_array, $datos[$c]);
                    }

                    for($c=4; $c<$numero; $c=$c+6){
                        array_push($distancia_array, $datos[$c]);
                    }

                    for($c=5; $c<$numero; $c=$c+6){
                        array_push($idsim_array, $datos[$c]);
                    }
            }

            fclose($handle);

            //print_r($idds_array);
            //print_r($tiempo_array);
            //print_r($velocidad_array);
            //print_r($fuel_array);
            //print_r($distancia_array);
            //print_r($idsim_array);

            $arraydatos_sim=array();

            for($i=0;  $i<$fila; $i++){
                $arraydatos_sim[$i]=new DatosSim($idds_array[$i],$tiempo_array[$i],
                $velocidad_array[$i],$fuel_array[$i],$distancia_array[$i],$idsim_array[$i]);

            }

           // print_r($arraydatos_sim);

        echo "<table>";
            echo "<tr>";
                echo "<th>ID_DS</th>";
                echo "<th>TIEMPO</th>";
                echo "<th>VELOCIDAD</th>";
                echo "<th>FUEL</th>";
                echo "<th>DISTANCIA</th>";
                echo "<th>ID_SIM</th>";
            echo "</tr>";

            for($i = 0; $i <count($arraydatos_sim); ++$i) {

                echo "<tr>";
                    echo "<td> " . $arraydatos_sim[$i]->getId_ds() . "</td>";
                    echo "<td> " . $arraydatos_sim[$i]->getTiempo() . "</td>";
                    echo "<td> " . $arraydatos_sim[$i]->getVel() . "</td>";
                    echo "<td> " . $arraydatos_sim[$i]->getFuel() . "</td>";
                    echo "<td> " . $arraydatos_sim[$i]->getDistancia() . "</td>";
                    echo "<td> " . $arraydatos_sim[$i]->getId_sim() . "</td>";
                echo "</tr>";
           }

        echo "</table>";

 	?>

 	<br>
 	<br>

 	<form action = "indice1.html" method="POST">

  			<input type="submit" name="Vuelta" value="Atrás">

  		</form>

  </body>

</html>
