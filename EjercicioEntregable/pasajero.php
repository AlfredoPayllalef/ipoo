<?php
class pasajero{
    private $nombre;
    private $apellido;
    private $numDocumento;
    private $telefono;
    private $numAsiento;
    private $numTiket;

    public function __construct($eNombre,$eApellido,$eNumDoc,$eTelefono,$eNumAsiento,$eNumTiket){
        $this->nombre=$eNombre;
        $this->apellido=$eApellido;
        $this->numDocumento=$eNumDoc;
        $this->telefono=$eTelefono;
        $this->numAsiento=$eNumAsiento;
        $this->numTiket=$eNumTiket;
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
    public function getNumAsiento(){
        return $this->numAsiento;
    }
    public function getNumTiket(){
        return $this->numTiket;
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
    public function setNumAsiento($eNumAsiento){
        $this->numAsiento=$eNumAsiento;
    }
    public function setNumTiket($eNumTiket){
        $this->numTiket=$eNumTiket;
    }
    //funcion to String
    public function __toString(){
        $cadena="Nombre:". $this->getNombre()."\n";
        $cadena.="Apellido:". $this->getApellido()."\n";
        $cadena.="Numero de Documento: ". $this->getNumDoc()."\n";
        $cadena.="Telefono: ". $this->getTelefono()."\n";
        $cadena.="Numero de asiento: ". $this->getNumAsiento()."\n";
        $cadena.="Numero de Tiket: ". $this->getNumTiket()."\n";
        return $cadena;
    }
    public function darPorcentajeIncremento(){
        $porcentaje=1.1;
        return $porcentaje;
    }
}