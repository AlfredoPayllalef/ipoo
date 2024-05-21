<?php
class Cliente{
    private $nombre;
    private $apellido;
    private $estado;
    private $tipoDoc;
    private $numDoc;

    public function __construct($eNombre,$eApellido,$eEstado,$eTipoDoc,$eNumDoc){
        $this->nombre=$eNombre;
        $this->apellido=$eApellido;
        $this->estado=$eEstado;
        $this->tipoDoc=$eTipoDoc;
        $this->numDoc=$eTipoDoc;
    }
    //metodos de acceso
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getTipoDoc(){
        return $this->tipoDoc;
    }
    public function getNumDoc(){
        return $this->numDoc;
    }
    //modificadores
    public function setNombre($eNombre){
        $this->nombre=$eNombre;
    }
    public function setApellido($eApellido){
        $this-> apellido=$eApellido;
    }
    public function setEstado($eEstado){
        $this->$estado=$eEstado;
    }
    public function setTipoDocu($eTipoDoc){
        $this->tipoDoc=$eTipoDoc;
    }
    public function setNumDoc($eNumDoc){
        $this->numDoc=$eNumDoc;
    }
    public function __toString(){
        $cadena="Nombre: ". $this->getNombre()."\n";
        $cadena.="Apellido: ". $this->getApellido()."\n";
        $cadena.="Estado:(true para activo,false para inactivo):". $this->getEstado()."\n";
        $cadena.="Tipo de Documento: ". $this->getTipoDoc();
        $cadena.="Numero: ". $this->getNumDoc()."\n";
        return $cadena;
    }
}