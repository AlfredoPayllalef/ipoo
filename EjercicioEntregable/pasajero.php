<?php
class pasajero{
    private $nombre;
    private $apellido;
    private $numDocumento;
    private $telefono;

    public function __construct($eNombre,$eApellido,$eNumDoc,$eTelefono){
        $this->nombre=$eNombre;
        $this->apellido=$eApellido;
        $this->numDocumento=$eNumDoc;
        $this->telefono=$eTelefono;
    }
    //metodos de acceso
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this-> apellido;
    }
    public function getNumDoc(){
        return $this->numDocumento;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    //modificadores
    public function setNombre($eNombre){
        $this->nombre=$eNombre;
    }
    public function setApellido($eApellido){
        $this->apellido=$eApellido;
    }
    public function setNumDoc($eNumDoc){
        $this->numDocumento=$eNumDoc;
    }
    public function setTelefono($eTelefono){
        $this->telefono=$eTelefono;
    }
    //funcion to String
    public function __toString(){
        $cadena="Nombre:". $this->getNombre()."\n";
        $cadena.="Apellido:". $this->getApellido()."\n";
        $cadena.="Numero de Documento: ". $this->getNumDoc()."\n";
        $cadena.="Telefono: ". $this->getTelefono()."\n";
        return $cadena;
    }
}