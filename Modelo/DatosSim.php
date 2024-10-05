<?php

class DatosSim{

    private $dist=0;        //Distancia a la superficie
    private $acel=0;        //Aceleración
    private $vel=0;         //Velocidad
    private $impulso=0;     // Impulso
    private $fuel=0;        // Fuel restante
    private $tiempo=0;      // Tiempo de simulación

    public function  __construct ($dist, $acel, $vel, $impulso, $fuel, $tiempo) {
		$this -> dist=$dist;
		$this -> acel=$acel;
		$this -> vel=$vel;
		$this -> impulso=$impulso;
		$this -> fuel=$fuel;
        $this -> tiempo=$tiempo;
	}

    public function getDist() {return $this->dist; }
	public function setDist($dist){$this->dist=$dist;}
	
	public function getAcel() {return $this->acel; }
	public function setAcel($acel){$this->acel=$acel;}
	
	public function getVel() {return $this->vel; }
	public function setVel($vel){$this->vel=$vel;}
	
	public function getImpulso() {return $this->impulso; }
	public function setImpulso($impulso){$this->impulso=$impulso;}

	public function getFuel() {return $this->fuel; }
	public function setFuel($fuel){$this->fuel=$fuel;}

    public function getTiempo() {return $this->tiempo; }
	public function setTiempo($tiempo){$this->tiempo=$tiempo;}

}

?>