<?php
Class Simulacion{

    private $id_sim; 
    private $id_usuario;
    private $id_lander;
    private $id_escenario;
    private  $fecha;

    public function __construct($id_sim, $id_usuario, $id_lander, $id_escenario, $fecha){

        $this->id_sim =$id_sim;
        $this->id_usuario =$id_usuario;
        $this->id_lander = $id_lander;
        $this->id_escenario =$id_escenario;
        $this->fecha = $fecha;
     
} 
public function getId_sim(){return $this->id_sim;}

public function setId_sim($id_sim){$this->id_sim = $id_sim;}
public function setId_usuario($Id_usuario){ $this->id_usuario=$Id_usuario;}

public function getId_usuario(){return $this->id_usuario;}

 public function set_Id_usuario($Id_usuario){$this->id_usuario = $Id_usuario;
}

public function getId_lander(){return $this->id_lander;}
public function setId_lander($id_lander){$this->id_lander = $id_lander;}

public function getId_escenario(){return $this->id_escenario;}
public function set_id_escenario($id_escenario){$this->id_escenario = $id_escenario;}

 public function get_fecha(){return $this->fecha;}
 public function set_fecha($fecha){$this->fecha = $fecha;}
}
?>