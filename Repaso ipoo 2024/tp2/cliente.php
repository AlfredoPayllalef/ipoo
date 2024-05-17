<?php
class ciente{
    private $nombre;
    private $dni;
    private $tramite;

    public function __construct($eNombre,$eDni,$eTramite){
        $this->nombre=$eNombre;
        $this->dni=$eDni;
        $this->tramite=$eTramite;
    } 
    //metodos de acceso
    public function getNombre(){
        return $this->nombre;
    }
    public function getDni(){
        return $this->dni;
    }
    public function getTramite(){
        return $this->tramite;
    }
    //modificadores
    public function setNombre($eNombre){
        $this->nombre=$eNombre;
    }
    public function setDni($eDni){
        $this->dni=$eDni;
    }
    public function setTramite($eTramite){
        $this->tramite=$eTramite;
    }
    //metodo toString
    public function __toString(){
        $cadena="Nombre Cliente:". $this->getNombre()."\n";
        $cadena.="Dni Cliente:". $this->getDni()."\n";
        $cadena.="tramite:". $this->getTramite();
        return $cadena;
    }
}