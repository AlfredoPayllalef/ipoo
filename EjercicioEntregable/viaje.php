<?php
class viaje{
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $colObjPasajeros;
    private $objResponsable;
    //
    private $costoViaje;
    private $sumCostos;


    public function __construct($eCodigo,$eDestino,$cantPasajeros,$ePasajeros,$eObjResponsable,$eCostoViaje,$eSumCostos){
        $this->codigo=$eCodigo;
        $this->destino=$eDestino;
        $this->cantMaxPasajeros=$cantPasajeros;
        $this->colObjPasajeros=$ePasajeros;
        $this->objResponsable=$eObjResponsable;
        $this->costoViaje=$eCostoViaje;
        $this->sumCostos=$eSumCostos;
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
    public function getCostoViaje(){
        return $this->costoViaje;
    }
    public function getSumaCostos(){
        return $this->sumCostos;
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
    public function setCostoViaje($eCostoViaje){
        $this->costoViaje=$eCostoViaje;
    }
    public function setSumaCosto($eCostoViaje){
        $this->costoViaje=$eCostoViaje;
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
        $cadena.="El costo del viaje es: ". $this->getCostoViaje()."\n";
        $cadena.="La Suma del costo del Viaje es: ". $this->getSumaCostos()."\n";
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
    /*venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de pasajeros 
    //( solo si hay espacio disponible), actualizar los costos abonados y retornar el costo
     final que deberá ser abonado por el pasajero*/
    
     public function venderPasaje($objPasajero){
        $costoFinal=-1;    
        if ($this-> agregarPasajero($objPasajero)) {
            $costo=$this->getCostoViaje();
            $costoFinal=$costo*$objPasajero->darPorcentajeIncremento();
            $costoAcumulado=$this->getSumaCostos()+$costoFinal;
            $this->setSumaCosto($costoAcumulado);
        }
        return $costoFinal;
    }
    public function hayPasajesDisponible(){
        $exito=false;
        $cantMax=$this->getCanMaxPasajeros();
        $colPasajeros=$this->getColObjPasajeros();
        if ($cantMax>count($colPasajeros)) {
            $exito=true;
        }
        return $exito;
    }

}
