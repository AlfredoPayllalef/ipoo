<?php
/*Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono.
 El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero.

Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar la operación
 que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar que el pasajero no este cargado 
 
 mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.*/


 class Pasajeros{
    private $Nombre;
    private $Apellido;
    private $numDoc;
    private $telefono;
    private $nAsiento;
    private $nTiket;

    public function __construct($name,$lastname,$dni,$numTel,$numAsiento,$numTiket){
        $this->Nombre=$name;
        $this->Apellido=$lastname;
        $this->numDoc=$dni;
        $this->telefono=$numTel;
        $this->nAsiento=$numAsiento;
        $this->nTiket=$numTiket;
    }
    public function getNombre(){
        return $this->Nombre;
    }
    public function getApellido(){
        return $this->Apellido;
    }
    public function getDni(){
        return $this->numDoc;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getnAsiento(){
        return $this->nAsiento;
    }
    public function getnTiket(){
        return $this->nTiket;
    }
    public function __toString(){
        return " Nombre Pasajero: ".$this->getNombre().
        "\n Apellido Pasajero: ". $this->getApellido().
        "\n Dni Pasajero: ". $this->getDni().
        "\n Telefono Pasajero: ". $this->getTelefono().
        "\n Numero de Asiento: ". $this->getnAsiento().  
        "\n Numero de Tiket: ". $this->getnTiket();;
    }
    public function setNombre($name){
        $this->Nombre=$name;
    }
    public function setApellido($lasName){
        $this->Apellido=$lasName;
    }
    public function setDni($dni){
        $this->numDoc=$dni;
    }
    public function setTelefono($telf){
        $this->telefono=$telf;
    }
    public function setnAsiento($numAsiento){
        return $this->nAsiento=$numAsiento;
    }
    public function setnTiket($numTiket){
        return $this->nTiket=$numTiket;
    }
    public function darPorcentajeIncremento($valorPasaje){
        $PasajeConIncremento=$valorPasaje*1.1;
        return $PasajeConIncremento;
    }

 }