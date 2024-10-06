<?php

 class Escenario{
 
 	private $id;		// identificador del escenario
	private $nombre;	// nombre
	private $g;			// gravedad
	private $ve;		// velocidad de entrada
	private $he;		// distancia
	
	public function  __construct ($id, $nombre, $g, $ve, $he) {
		$this -> id=$id;
		$this -> nombre=$nombre;
		$this -> g=$g;
		$this -> ve=$ve;
		$this -> he=$he;
	}
	
	public function getId() {return $this->id; }
	public function setId($id){$this->id=$id;}
	
	public function getNombre() {return $this->nombre; }
	public function setNombre($nombre){$this->nombre=$nombre;}
	
	public function getG() {return $this->g; }
	public function setG($g){$this->g=$g;}
	
	public function getVe() {return $this->ve; }
	public function setVe($ve){$this->ve=$ve;}

	public function getHe() {return $this->he; }
	public function setHe($he){$this->he=$he;}
	
 }

?>
