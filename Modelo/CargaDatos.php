<?php

// Incluir las clases
include("PerfilPot.php");
include("Lander.php");
include("Player.php");
include("Escenario.php");
include("Puntuacion.php");
include("DatosSim.php");

// función para creada para cargarDatos de forma in-line
function cargarDatos() {
    // jugadores
    $jugadores = []; // array vacío
    $jugador1 = new Player("RMS", "root", "DIFC");
    $jugador1->setId(1); // id jugador
    $jugador2 = new Player("PLAYER1", "pwd1", "1WET");
    $jugador2->setId(2); // id jugador
    $jugador3 = new Player("PLAYER2", "pwd2", "1WET");
    $jugador3->setId(3); // id jugador
    $jugador4 = new Player("PLAYER3", "pwd3", "1WET");
    $jugador4->setId(4); // id jugador
    $jugadores = [ $jugador1, $jugador2, $jugador3 , $jugador4 ]; // array con los todos los Jugadores

    // Landers
    $landers = []; // array vacío
    $lander1 = new Lander("APOLLO-XIII",2800.0, 24.0);
    $lander2 = new Lander("PATHFINDER",  5600.0, 48.0);
    $lander3 = new Lander("MARS-V",  2800.0, 24.0);
    $lander4 = new Lander("EUROPA-VII",  2800.0, 24.0);
    $landers = [ $lander1, $lander2, $lander3 , $lander4 ]; // array con todos los Landers

    // Escenarios
    $escenarios = []; // array vacío
    $escenario1 = new Escenario("001", "MOON", 1.62, 2.0, 3500.0);
    $escenario2 = new Escenario("002", "MARS", 3.71, 0.0, 2500.0);
    $escenario3 = new Escenario("003", "CALLISTO", 1.235, 4.3, 3500.0);
    $escenario4 = new Escenario("004", "PLUTO", 0.62, 9.8, 1750.0);
    $escenarios = [ $escenario1, $escenario2, $escenario3, $escenario4 ]; // array con todos los Escenarios

    // Puntuaciones
    $puntuaciones = []; // array vacío
    $puntuacion1 = new Puntuacion(1,120,30, "2024-10-10 14:23:47");
    $puntuacion2 = new Puntuacion(1,640,10, "2024-09-18 17:19:47");
    $puntuacion3 = new Puntuacion(3,350,55, "2024-09-12 22:30:55");
    $puntuaciones  = [ $puntuacion1, $puntuacion2, $puntuacion3 ]; // array con todas las puntuaciones

    // Perfiles de Potencia -- REVISAR (como definir esta clase correctamente) 
    $perfil_pot1 = new PerfilPot();
    $perfil_pot2 = new PerfilPot();
    $perfil_pot3 = new PerfilPot();

    // de vuelve un array de datos combinados 
    return ["Jugadores" => $jugadores,
            "Landers" => $landers,
            "Escenarios" => $escenarios,
            "Puntuaciones" => $puntuaciones
        ];
}
?>
