<?php

class DatosSim{

    private $id_ds=0;
    private $tiempo=0;
	private $vel=0;
    private $fuel=0;
    private $distancia=0;
    private $id_sim=0;

    public function  __construct ($id_ds, $tiempo, $vel, $fuel, $distancia, $id_sim) {
		$this -> id_ds=$id_ds;
		$this -> tiempo=$tiempo;
		$this -> vel=$vel;
		$this -> fuel=$fuel;
		$this -> distancia=$distancia;
        $this -> id_sim=$id_sim;
	}

    public function getId_ds() {return $this->id_ds; }
	public function setId_ds($id_ds){$this->id_ds=$id_ds;}
	
	public function getTiempo() {return $this->tiempo; }
	public function setTiempo($tiempo){$this->tiempo=$tiempo;}
	
	public function getVel() {return $this->vel; }
	public function setVel($vel){$this->vel=$vel;}

	public function getFuel() {return $this->fuel; }
	public function setFuel($fuel){$this->fuel=$fuel;}
	
	public function getDistancia() {return $this->distancia; }
	public function setDistancia($distancia){$this->distancia=$distancia;}

    public function getId_sim() {return $this->id_sim; }
	public function setId_sim($id_sim){$this->id_sim=$id_sim;}

}

?>
