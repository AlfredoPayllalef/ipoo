<?php
/*También se desea guardar la información de la persona
  responsable de realizar el viaje, para ello cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y 
  apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.*/ 

  class ResponsableV{
    private $Nombre;
    private $Apellido;
    private $numLicencia;
    private $numEmpleados;

    public function __construct($name,$lastName,$licencia,$nEmpleado){
      $this->Nombre=$name;
      $this->Apellido=$lastName;
      $this->numLicencia=$licencia;
      $this->numEmpleados=$nEmpleado;
    }
    public function getNombre(){
      return $this->Nombre;
    }
    public function getApellido(){
        return $this->Apellido;
    }
    public function getNumLicencia(){
        return $this->numLicencia;
    }
    public function getNumEmpleado(){
        return $this->numEmpleados;
    }
    public function __toString(){
      return " Nombre Responsable: ".$this->getNombre().
      "\n Apellido Responsable: ". $this->getApellido().
      "\n Numero de Licencia: ". $this->getNumLicencia().
      "\n Numero de Empleado: ". $this->getNumEmpleado();
  }
  public function setNombre($name){
      $this->Nombre=$name;
  }
  public function setApellido($lasName){
      $this->Apellido=$lasName;
  }
  public function setNumLicencia($numLicencia){
      $this->numLicencia=$numLicencia;
  }
  public function setNumEmpleado($nEmpleado){
      $this->numEmpleados=$nEmpleado;
  }
  }