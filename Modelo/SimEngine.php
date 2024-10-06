<?php

class SimEngine{
    // atributos
    private $dist = 0.0; // Distancia a la superficie m
	private $acel = 0.0; // aceleración m·s-2
	private $vel = 0.0; // velocidad en m· s-1
	private $dist_ant; // variable auxiliar para guardar el último valor de distancia
	private $vel_ant; // variable auxiliar para guardar el último valor de velocidad
	private $impulso = 0.0; // Impulso retrocohetes en m·s-2
	private $tiempo = 0; // Tiempo de simulación
	private $G; // Gravedad a aplicar en la simulación
	private $dt; // Diferencial de tiempo de la simulación
	final $DT = 5; // Diferencial de tiempo que escojemos en segundos.

    // constructor
    public function __construct($dist_ant, $vel_ant, $g){
        $this->dist_ant = $dist_ant; // Distancia de entrada a la simulación
        $this->vel_ant = $vel_ant; // velocidad de entrada
        $this->G = $g; // G del planeta / satélite
        $this->dt = $this->DT; // Valor del dt
    }

    // getter & setter
    public function getDist(){ return $this->dist; }
    public function setDist($dist){ $this->dist = $dist; }

    public function getAcel(){ return $this->acel; }
    public function setAcel($acel){ $this->acel = $acel; }

    public function getG(){ return $this->vel; }
    public function setG($g){ $this->vel = $g; }

    public function getDist_ant(){ return $this->vel_ant; }

    public function setTiempo($tiempo){return $this->tiempo = $tiempo; }
    public function getTiempo(){ return $this->tiempo; }

    public function setDt($dt){ $this->dt = $dt; }
    public function getDt(){ return $this->dt; }

    public function setImpulso($impulso){ $this->impulso = $impulso; }
    public function getImpulso(){ return $this->impulso; }

    public function setVel( $vel){ $this->vel = $vel; }
    public function getVel(){ return $this->vel; }


    // guarda los datos del instante actual
	// no se tiene fuel,por lo que se inicializa con valor 0.0
    public function getSimData(){
        $ds = new DatosSim($this->dist, $this->acel, $this->vel, $this->impulso, 0.0, $this->tiempo);
        return $ds;
    }


	// Simulación física de la aceleración, velocidad y distancia en cada intervalo
	// de tiempo
	// El valor del impulso se establece desde el objeto que es propietario de este
	// motor
	// de simulación (la simulación lanzada por el usuario).
	// desde el metodo aplica_motor()
    public function sim_frame(){
        $this->acel = $this->impulso - $this->G;
        $this->vel = $this->vel_ant + [ $this->acel * doubleval($this->dt)];
        $this->dist = $this->dist_ant + [ $this->vel * doubleval($this->dt)];
        $this->acel = $this->tiempo + $this->dt; // Actualizo el tiempo
        $this->vel_ant = $this->vel; // Actualizo variables temporales
        $this->dist_ant = $this->dist;

    }

}

?>