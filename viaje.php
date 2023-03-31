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

 class viajeFeliz{
    private $codigo;
    private $destino;
    private $cantMaxPasajeros;
    private $pasajeros;
    private $nombre;
    private $apellido;
    private $nDoc;

    function __construct($codigoViaje,$destinoViaje,$cantPasajeros,$pasajerosViaje,$unNombre,$unApellido,$dni){
        $this->$codigo=$codigoViaje;
        $this->$destino=$destinoViaje;
        $this->$cantMaxPasajeros=$cantPasajeros;
        $this->$pasajeros=$pasajerosViaje;
        $this->$nombre=$unNombre;
        $this->$apellido=$unApellido;
        $this->$nDoc=$dni;
    }

    public function getCodigo(){
        return $this-> $codigo;
    }
    public function getDestino(){
        return $this->$destino;
    }
    public function getCantMaxPasajeros(){
        return $this->$cantMaxPasajeros;
    }
    public function getPasajeros(){
        return $this->$pasajeros;
    }
    public function getNombre(){
        return $this->$nombre;
    }
    public function getApellido(){
        return $this->$apellido;
    }
    public function getnDoc(){
        return $this->$nDoc;
    }
    public function setCodigo_1($nuevoCodigo){
       return $this->$codigo=$nuevoCodigo;
    }
    public function setDestino_2($nuevoDestino){
        return $this->$destino=$nuevoDestino;
    }
    public function setCantPasajeros_3($nuevaCantPasajeros){
        return $this->$cantMaxPasajeros=$nuevaCantPasajeros;
    }
    public function setPasajeros_4($nuevoPasajero){
        return $this->$pasajeros=$nuevoPasajero;
    }
    public function setNombre_5($nuevoNombre){
        return $this->$nombre=$nuevoNombre;
    }
    public function setApellido_6($nuevoApellido){
        return $this->$apellido=$nuevoApellido;
    }
    public function setnDoc_7($nuevoDni){
        return $this->$nDoc=$nuevoDni;
    }

    public function nuevoViaje($codigoV,$destinoV,$pasajMax,$pasaj){
        $this->setCodigo_1($codigoV);
        $this->setDestino_2($destinoV);
        $this->setCantPasajeros_3($pasajMax);
        $this->setPasajeros_4($pasaj);
    }
    public function nuevoPasajero($nombreV,$apellidoV,$dniV){
        $this->setNombre_5($nombreV);
        $this->setApellido_6($apellidoV);
        $this->setnDoc_7($dniV);
    }
 }