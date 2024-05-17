<?php
class tramites{
    private $hsInicio;
    private $hsFinal;
    private $fechaInicio;
    private $fechaCierre;

    public function __construct($inicio,$fin,$fechaInicio,$eFechaCierre){
        $this->hsInicio=$inicio;
        $this->hsFinal=$fin; 
        $this->fechaInicio=$eFechaInicio;
        $this->fechaCierre=$eFechaCierre;      
    }
    //metodos de acceso
    public function getHsInicio(){
        return $this->hsInicio;
    }
    public function getHsFinal(){
        return $this-> hsFinal;
    }
    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function getFechaCierre(){
        return $this->fechaCierre;
    }
    //modificadores
    public function setHsInicio($inicio){
        $this->hsInicio=$inicio;
    }
    public function setHsFinal($fin){
        $this->hsFinal=$fin;
    }
    public function setFechaInicio($eFechaInicio){
        $this->fechaInicio=$eFechaInicio;
    }
    public function setFechaCierre($eFechaCierre){
        $this->fechaCierre=$eFechaCierre;
    }
    //funccion toString()
    public function __toString(){
        $cadena="Hora de inicio de Tramite: ". $this->getHsInicio()."\n";
        $cadena.="Hora de Finalizacion de Tramite.". $this->getHsFinal()."\n";
        return $cadena;
    }
}