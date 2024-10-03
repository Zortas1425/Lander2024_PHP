<?php

class Puntuacion {
    private $id_Usuario;
    private $tiempo;
    private $fuel;
    private $fecha;

    public function __construct($id_Usuario, $tiempo, $fuel, $fecha) {
        $this->id_Usuario = $id_Usuario;
        $this->tiempo = $tiempo;
        $this->fuel = $fuel;
        $this->fecha = $fecha;
    }

    public function getId_Usuario(): int {
        return $this->id_Usuario;
    }

    public function setId_Usuario($id_Usuario): void {
        $this->id_Usuario = $id_Usuario;
    }

    public function getTiempo(): int {
        return $this->tiempo;
    }

    public function setTiempo($tiempo): void {
        $this->tiempo = $tiempo;
    }

    public function getFuel(): float {
        return $this->fuel;
    }

    public function setFuel($fuel): void {
        $this->fuel = $fuel;
    }

    public function getFecha(): string {
        return $this->fecha;
    }

    public function setFecha($fecha): void {
        $this->fecha = $fecha;
    }
}