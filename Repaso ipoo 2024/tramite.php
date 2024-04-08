<?php
class tramites{
    private $hsInicio;
    private $hsFinal;

    public function __construct($inicio,$fin){
        $this->hsInicio=$inicio;
        $this->hsFinal=$fin;       
    }
    //metodos de acceso
    public function getHsInicio(){
        return $this->hsInicio;
    }
    public function getHsFinal(){
        return $this-> hsFinal;
    }
    //modificadores
    public function setHsInicio($inicio){
        $this->hsInicio=$inicio;
    }
    public function setHsFinal($fin){
        $this->hsFinal=$fin;
    }
    //funccion toString()
    public function __toString(){
        $cadena="Hora de inicio de Tramite: ". $this->getHsInicio()."\n";
        $cadena.="Hora de Finalizacion de Tramite.". $this->getHsFinal()."\n";
        return $cadena;
    }
}