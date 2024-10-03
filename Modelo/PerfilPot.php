<?php

class PerfilPot{
    // atributos
    private $id;
    public $potencia = []; // Lo dejo vacío pero esto es un array de diez posiciones [10]

    // constructor vacío
    public function __construct(){
    }

    // getter & setter
    public function setId($_id){
        $this->id = $_id;
    }
    public function setPotencia($_potencia){
        $this->potencia = $_potencia;
    }
    public function getId(){
        return $this->id;
    }
    public function getPotencia(){
        return $this->potencia;
    }

}