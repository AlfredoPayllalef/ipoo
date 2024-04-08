<?php

class disquera{
   private $horas_desde;
   private $horas_hasta;
   private $estado;
   private $direccion;
   private $objPersona;

   public function __construct($arrayApertura,$arrayCierre,$edo,$adrres,$objDuenioLocal){
        $this->horas_desde=$arrayApertura;
        $this->horas_hasta=$arrayCierre;
        $this->estado=$edo;
        $this->direccion=$adrres;
        $this->objPersona=$objDuenioLocal;
   }
   //metodos de acceso
   public function getApertura(){
    return $this->horas_desde;
   }
   public function getCierre(){
    return $this->horas_hasta;
   }
   public function getEstado(){
    return $this->estado;
   }
   public function getDireccion(){
    return $this->direccion;
   }
   public function getDuenio(){
    return $this->objPersona;
   }
   //modificadores
   public function setApertura($hs){
    $this->horas_desde=$hs;
   }
   public function setCierre($hs){
    $this->horas_hasta=$hs;
   }
   public function setEstado($edo){
    $this->estado=$edo;
   }
   public function setDireccion($adrres){
    $this->direccion=$adrres;
   }
   public function setDuenio($newobjPersona){
    $this->objPersona=$newobjPersona;
   }
   //mostrarHoras
    public function mostrarApertura(){
        $arrayApertura=$this->getApertura();
        $cadena=$arrayApertura["hora"].":".$arrayApertura["minutos"];
        return $cadena;
    }
    public function mostrarCierre(){
        $arrayCierre=$this->getCierre();
        $cadena=$arrayCierre["hora"].":".$arrayCierre["minutos"];
        return $cadena;
    }
   //metodo toString()
   public function __toString(){
    $cadena="Hora de apertura: ". $this->mostrarApertura()."\n";
    $cadena.="Hora de cierre: ". $this->mostrarCierre()."\n";
    $cadena.="Estado del Local: ". $this->getEstado()."\n";
    $cadena.="Direccion del Local: ". $this->getDireccion()."\n";
    $cadena.="Dueño del local: ". $this->getDuenio()."\n";
    return $cadena;
   }
   //funcino que dado horas y minutos retorna bloeano si esta abierto o cerrado
   public function dentroHorarioAtencion($hora,$minutos){
    $horaApertura=$this->getApertura();
    $horaCierre=$this->getCierre();
    $exito=false;
        if($horaApertura["hora"]<$hora && $horaCierre["hora"]>$hora ){
            $exito=true;
        }
        if ($horaApertura["hora"]==$hora && $horaApertura["minutos"]<$minutos || $horaCierre["hora"]==$hora && $horaCierre["minutos"]>$minutos) {
            $exito=true;
        }
        return $exito;
   }
   //
   public function abrirDisquera($hora,$minutos){
        $estado=$this->getEstado();
        if (dentroHorarioAtencion($hora,$minutos)) {
            if ($estado=="cerrado") {
                $this->setEstado("abierto");
            }
        }
   }
   public function cerrarDisquera($hora,$minutos){
    $estado=$this->getEstado();
        if (!dentroHorarioAtencion($hora,$minutos)) {
            if ($estado=="abierto") {
                $this->setEstado("cerrado");
            }
        }
   }

}