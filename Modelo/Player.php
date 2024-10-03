<?php

class Player {
    private $id = 0;
    private $nombre;
    private $pwd;
    private $grupo;
    private $fechaLogin;

    public function __construct($nombre, $pwd, $grupo) {
        // El super de la clase java se usa como una herencia de una clase pero no se si hay una herencia.
        //parent::__construct(aqui tendria q estar lo q se pide de la clase padre);
        // Si ese es el caso tm deberia añaadir el extends en class Player.
        $this->nombre = $nombre;
        $this->pwd = $pwd;
        $this->grupo = $grupo;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function getPwd(): string {        
        return $this->pwd;
    }

    public function setPwd($pwd): void {
        $this->pwd = $pwd;
    }

    public function getGrupo(): string {
        return $this->grupo;
    }

    public function setGrupo($grupo): void {
        $this->grupo = $grupo;
    }

    public function getFechaLogin(): \DateTime {
        return $this->fechaLogin;
    }

    public function setFechaLogin(\DateTime $fechaLogin): void {
        $this->fechaLogin = $fechaLogin;
    }

    public function __toString(): string {
        return $this->nombre . "  ( " . $this->grupo . " )";
    }
}
