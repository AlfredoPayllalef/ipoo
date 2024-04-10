<?php
class viaje{
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $colObjPasajeros;
    private $objResponsable;

    public function __construct($eCodigo,$eDestino,$cantPasajeros,$ePasajeros,$eObjResponsable){
        $this->codigo=$eCodigo;
        $this->destino=$eDestino;
        $this->cantMaxPasajeros=$cantPasajeros;
        $this->colObjPasajeros=$ePasajeros;
        $this->objResponsable=$eObjResponsable;
    }
    //metodos de acceso
    public function getCodigo(){
        return $this->codigo;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function getCanMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }
    public function getColObjPasajeros(){
        return $this->colObjPasajeros;
    }
    public function getObjResponsable(){
        return $this->objResponsable;
    }
    //modificadores
    public function setCodigo($eCodigo){
        $this->codigo=$eCodigo;
    }
    public function setDestino($eDestino){
        $this->destino=$eDestino;
    }
    public function setCantMaxPasajeros($cantPasajeros){
        $this->cantMaxPasajeros=$cantPasajeros;
    }
    public function setColObjPasajeros($ePasajeros){
        $this->colObjPasajeros=$ePasajeros;
    }
    public function setObjResponsable($eObjResponsable){
        $this->objResponsable=$eObjResponsable;
    }
    //mostrar pasajeros:
    public function mostrarPasajeros(){
        $colPasajeros=$this->getColObjPasajeros();
        $cadena="=======================\n";
        for ($i=0; $i <count($colPasajeros) ; $i++) { 
            $cadena.="|N°".$i."|".$colPasajeros[$i]->__toString()."\n";
        }
        $cadena.="=======================\n";
        return $cadena;
    }
    public function __toString(){
        $cadena="El codigo del Viaje es: ". $this->getCodigo()."\n";
        $cadena.="El destino del viaje es: ". $this->getDestino()."\n";
        $cadena.="La cantidad maxima de pasajeros es:". $this->getCanMaxPasajeros();
        $cadena.="Los pasajeros del viaje son: ". $this->mostrarPasajeros();
        $cadena.="=====================\n Informacion del responsable del viaje: ". $this->getObjResponsable()."\n=====================\n";
        return $cadena;
    }

    public function buscarPersonaPorDni($dniPersona){
        $arrayPasajeros=$this->getColObjPasajeros();
        $bandera=false;
        $i=0;
        $objPersona=null;
        while ($i<count($arrayPasajeros) && !$bandera ) {
            $dni=$arrayPasajeros[$i]->getNumDoc();
            if ($dni==$dniPersona) {
                $objPersona=$arrayPasajeros[$i];
                $bandera=true;
            }
            $i=$i+1;
        }
        return $objPersona;
    }
    public function agregarPasajero($objPasajero){
        $pasajeros=$this->getColObjPasajeros();
        $cantMaxima=$this->getCanMaxPasajeros();
        $bandera=false;
        $exito=false;
        $dni=$objPasajero->getNumDoc();
        $i=0;
        while ($i<count($pasajeros) && !$bandera) {
            $eDni=$pasajeros[$i]->getNumDoc();
            if ($dni==$eDni) {
                $bandera=true;
            }
            $i=$i+1;
        }
        if ($bandera==false && $cantMaxima>count($pasajeros)) {
            $pasajeros[]=$objPasajero;
            $this->setColObjPasajeros($pasajeros);
            $exito=true;
        }
        return $exito;
    }

}
