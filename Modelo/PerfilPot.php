<?php

class PerfilPot{
    // atributos
    private $id;
    private $potencia = []; // array de diez posiciones

    // constructor
    public function __construct(){
        $this->potencia = array_fill(0,10,0.0);
    }

    // getter & setter
    public function setId($_id){
        $this->id= $_id;
    }

    // Setter para actualizar el valor en una posición específica del array
    public function setPotencia($_nivel, $valor){
        if ($_nivel >= 0 && $_nivel < 10) {
            $this->potencia[$_nivel] = $valor;
        } else {
            throw new Exception("El nivel debe estar entre 0 y 9.");
        }
}
    public function getId(){ return $this->id; }
    public function getPotencia(){ return $this->potencia; }
    
} // PerfilPot

?>