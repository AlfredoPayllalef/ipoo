<?php

/*La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes.
 De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros
  del viaje.
Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos
 de dicha clase (incluso los datos de los pasajeros). Utilice un array que almacene la información 
 correspondiente a los pasajeros. Cada pasajero es un array asociativo con las claves “nombre”, “apellido” y
  “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita
 cargar la información del viaje, modificar y ver sus datos*/

 class Viaje{
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $objPasajeros;
    private $objResponsable;
    private $costoViaje;
    private $sumaCostos;
    
    public function __construct($codigoViaje,$destinoViaje,$cantPasajeros,$objColPasajeros,$objResp,$costo,$acumCostos){
        $this->codigo=$codigoViaje;
        $this->destino=$destinoViaje;
        $this->cantMaxPasajeros=$cantPasajeros;
        $this->objPasajeros=$objColPasajeros;
        $this->objResponsable=$objResp;
        $this->$costoViaje=$costo;
        $this->$sumaCostos=$acumCostos;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getDestino(){
        return $this->destino;
    }
    public function getCantMaxPasajeros(){
        return $this->cantMaxPasajeros;
    }
    public function getColObjPasajeros(){
        return $this->objPasajeros;
    }
    public function getObjResps(){
        return $this->objResponsable;
    }
    public function getcostoViaje(){
        return $this->costoViaje;
    }
    public function getsumaCostos(){
        return $this->sumaCostos;
    }
    public function setCodigo_1($nuevoCodigo){
       $this->codigo=$nuevoCodigo;
    }
    public function setDestino_2($nuevoDestino){
        $this->destino=$nuevoDestino;
    }
    public function setCantPasajeros_3($nuevaCantPasajeros){
        $this->cantMaxPasajeros=$nuevaCantPasajeros;
    }
    public function setColObjPasajeros_4($nuevoObjPasajero){
        $this->objPasajeros=$nuevoObjPasajero;
    }
    public function setObjResp_5($nuevoObjResp){
        $this->objResponsable=$nuevoObjResp;
    }
    public function setcostoViaje_6($costo){
        $this->costoViaje=$costo;
    }
    public function setsumaCostos_7($acumCostos){
        $this->sumaCostos=$acumCostos;
    }
    public function nuevoViaje($codigoV,$destinoV,$pasajMax,$ObjPasaj,$objResp){
        $this->setCodigo_1($codigoV);
        $this->setDestino_2($destinoV);
        $this->setCantPasajeros_3($pasajMax);
        $this->setPasajeros_4($ObjPasaj);
        $this->setObjResp_5($objResp);
    }
    public function nuevoPasajero($nombreV,$apellidoV,$dniV){
        $this->setNombre_5($nombreV);
        $this->setApellido_6($apellidoV);
        $this->setnDoc_7($dniV);
    }
    public function __toString1(){
        return print_r($this->getPasajeros());
    }
    public function __toString(){
        return " Codigo de Viaje: ".$this->getCodigo().
        "\n Destino: ".$this->getDestino().
        "\n Cantidad pasajeros: ".$this->getCantMaxPasajeros();
    }
    public function  hayPasajesDisponible(){
        $Maximo=$this->getCantMaxPasajeros();
        $colPasajeros=$this->getColObjPasajeros();
        $ocupados=count($colPasajeros);
        $asiento=false;
        if ($Maximo>$ocupados) {
            $asiento=true;
        }
        return $asiento;
    }

    public function venderPasaje($objPasajero){
        $asiento=hayPasajesDisponible();
        $colPasajeros=$this->getColObjPasajeros();
        $venta=false;
        if ($asiento==true) {
            $colPasajeros[count($colPasajeros)]=$objPasajero;
            $this->setColObjPasajeros_4($colPasajeros);
            $venta=darPorcentajeIncremento($this->getcostoViaje());
            $costo=$this->getsumaCostos();
            $this->setsumaCostos_7($venta+$costo);
        }
        return $venta;
    }
 }