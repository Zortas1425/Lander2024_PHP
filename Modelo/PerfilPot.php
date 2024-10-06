<?php

class PerfilPot{
    // atributos
    private $id;
    public array $potencia = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]; // array de diez posiciones inicializadas en 0

    // constructor
    public function __construct(){ }

    // getter & setter
    public function setId($_id){ $this->id = $_id; }
    public function setPotencia(array $_potencia){ $this->potencia = $_potencia; }
    public function getId(){ return $this->id; }
    public function getPotencia(){ return $this->potencia; }
    
} // PerfilPot

?>