<?php

 class Escenario{
 
 	private $id;
	private $nombre;
	private $g;
	private $ve;
	private $he;
	
	public function  __construct ($id, $nombre, $g, $ve, $he) {
		$this -> id=$id;
		$this -> nombre=$nombre;
		$this -> g=$g;
		$this -> ve=$ve;
		$this -> he=$he;
	}
	
	public function getId() {return $this->id; }
	public function setId($id){$this->id=$id;}
	
	public function getnombre() {return $this->nombre; }
	public function setnombre($nombre){$this->nombre=$nombre;}
	
	public function getG() {return $this->g; }
	public function setG($g){$this->g=$g;}
	
	public function getVe() {return $this->ve; }
	public function setVe($ve){$this->ve=$ve;}

	public function getHe() {return $this->he; }
	public function setHe($he){$this->he=$he;}
	
 }

?>