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

    public function __construct($name,$lastname,$dni,$numTel){
        $this->Nombre=$name;
        $this->Apellido=$lastname;
        $this->numDoc=$dni;
        $this->telefono=$numTel;
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
    public function __toString(){
        return " Nombre Pasajero: ".$this->getNombre().
        "\n Apellido Pasajero: ". $this->getApellido().
        "\n Dni Pasajero: ". $this->getDni().
        "\n Telefono Pasajero: ". $this->getTelefono();
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


 }