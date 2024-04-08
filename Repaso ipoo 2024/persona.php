<?php

class persona{
    private $nombre;
    private $apellido;
    private $tipo;
    private $numeroDocumento;
    private $objTramite;

    public function __construct($name,$lastName,$tipoDoc,$numero,$tramite){
        $this->nombre=$name;
        $this->apellido=$lastName;
        $this->tipo=$tipoDoc;
        $this->numeroDocumento=$numero;
        $this->objTramite=$tramite;
    }
    //metodos de acceso
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getNumeroDoc(){
        return $this->numeroDocumento;
    }
    public function getObjTramite(){
        return $this->objTramite;
    }
    //modificadores
    public function setNombre($name){
        $this->nombre=$name;
    }
    public function setApellido($lastName){
        $this->apellido=$lastName;
    }
    public function setTipo($tipoDoc){
        $this->tipo=$tipoDoc;
    }
    public function setNumeroDoc($ndoc){
        $this->numeroDocumento=$ndoc;
    }
    public function setObjTramites($tramite){
        $this->objTramite=$tramite;
    }
    //metodo toString
    public function __toString(){
        $cadena="\n El nombre es: ". $this->getNombre()."\n";
        $cadena.="El apellido es: ". $this->getApellido()."\n";
        $cadena.="Tipo de documento: ". $this->getTipo()."\n";
        $cadena.="Numero: ". $this->getNumeroDoc()."\n";
        $cadena.="El tramite". $this->getObjTramite();
        return $cadena;
    }
}