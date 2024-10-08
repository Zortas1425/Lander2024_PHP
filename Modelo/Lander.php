<?php

class Lander {
    // atributos
    private $id = 0;
    private $nombre;
    private $impulso = 0;
    private $nivel_impulso = 0;
    private $fuel_a_quemar;
    private $fuel_deposito;
    private $tiempo = 0;
    private $res_tren;
    private PerfilPot $perfPot;

    // constantes
    private const VEL_MAX = 20.0;
    private const trust_level = [ 0.0, 1.0, 2.0, 3.0, 4.0, 5.0, 6.0, 7.0, 8.50, 20.0 ];
    
    //constructor
    public function __construct($_nombre, $_fuel_deposito, $_res_tren){
        $this->nombre = $_nombre;
        $this->fuel_deposito = $_fuel_deposito;
        $this->res_tren = $_res_tren;
        $this->perfPot = new PerfilPot();
    }

    // getter & setter
    public function setNombre(int $_nombre){ $this->nombre = $_nombre; }
    public function getNombre(){ return $this->nombre; }

    public function setImpulso(int $_impulso){ $this->impulso = $_impulso; }
    public function getImpuslo(){ return $this->impulso; }

    public function setNivel_impulso(int $_nivel_impulso){ $this->nivel_impulso = $_nivel_impulso; }
    public function getNivel_impulso(){ return $this->nivel_impulso; }

    public function setFuel_a_quemar(int $_fuel_a_quemar){ $this->fuel_a_quemar = $_fuel_a_quemar; }
    public function getFuel_a_quemar(){ $this->fuel_a_quemar; }

    public function setId(int $_id){ $this->id = $_id; }
    public function getId(){ $this->id; }
    
    public function setFuel_Deposito(int $_fuel_deposito){ $this->fuel_deposito = $_fuel_deposito; }
    public function getFuel_Deposito(){ $this->fuel_deposito; }

    public function setRes_tren(int $_res_tren){ $this->res_tren = $_res_tren; }
    public function getRes_tren(){ $this->res_tren; }
    
    public function setTiempo(int $_tiempo){ $this->tiempo = $_tiempo; }
    public function getTiempo(){ $this->tiempo; }
    public function setPerfPot(PerfilPot $p){ $this->perfPot = $p; }

    public function getPerfPot($nivel){
        return $this->perfPot->getPotencia()[$nivel];
    }

    // To-String
    public function __tostring(){
        return $this->nombre ."  (Fuel)  ". $this->fuel_deposito . "  (Tren AT)  " . $this-> res_tren;
    }

} // Lander

?>