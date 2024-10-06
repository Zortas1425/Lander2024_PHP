<!DOCTYPE html>
<html lang="es-ES">

<!-- Índice de escenarios -->
	
	<head>
        <meta charset="utf-8">
        <meta name="Índice de escenarios" content="Escenarios" />
   	   	   
        <title>Escenarios</title>
        <link rel="stylesheet" type="text/css" href="presentacion.css" />
    </head>
  
  <body>
  
   <h1>L A N D E R 2 0 2 4</h1>
   
 	<h2>Índice de Escenarios</h2>
 	
 	<h3>Elija un escenario</h3>
 	
 	<?php

	include "Escenario.php"; 	 
 	 
    $escenarios=array();

    $idEscenario = array(1, 2, 3, 4);
    $nombres = array("MOON","MARS", "CALLISTO", "PLUTO");
    $gravedad = array(1.62, 3.71, 1.235, 0.62);
    $ve = array(2, 0, 4.3, 9.8);
    $he = array(3500, 2500, 3500, 1750);

        for($i=0;  $i<4; $i++){
          $escenarios[$i]=new Escenario($idEscenario[$i],$nombres[$i],
          $gravedad[$i],$ve[$i],$he[$i]);
        } 

        echo "<table>";
            echo "<tr>";
                echo "<th>NOMBRE</th>";
                echo "<th>GRAVEDAD</th>";
                echo "<th>VELOCIDAD</th>";
                echo "<th>DISTANCIA</th>";
            echo "</tr>";

            for($i = 0; $i <count($escenarios); ++$i) {

                echo "<tr>";
                    echo "<td> " . $escenarios[$i]->getNombre() . "</td>";
                    echo "<td> " . $escenarios[$i]->getG() . "</td>";
                    echo "<td> " . $escenarios[$i]->getVe() . "</td>";
                    echo "<td> " . $escenarios[$i]->getHe() . "</td>";
                echo "</tr>";
           }

        echo "</table>";

        /*for($i = 0; $i <count($escenarios); ++$i) {
            echo $escenarios[$i]->getId() . "\t" . $escenarios[$i]->getNombre() . "\t" . $escenarios[$i]->getG() . "\t"
                . $escenarios[$i]->getVe() . "\t" . $escenarios[$i]->getHe();
        }*/
 	?>

 	<br>
 	<br>

 	<form action = "indice1.html" method="POST">

  			<input type="submit" name="Vuelta" value="Atrás">

  		</form>
   
  </body>

</html>
