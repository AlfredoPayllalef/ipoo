<?php
include_once("Pasajeros.php");
class PasajeroNecesidadEspecial extends Pasajeros{
    private $NecesitaAsistencia;
    private $NecesitaSilla;
    private $comidaEspecial;
    
    public function __construct($name,$lastname,$dni,$numTel,$numAsiento,$numTiket,$Asistencia,$silla,$comida){
        parent:: __construct($name,$lastname,$dni,$numTel,$numAsiento,$numTiket);
            $this->notaTipoNecesidad=$Necesidad;
    }
    public function getAsistencia(){
        return $this->NecesitaAsistencia;
    }
    public function setAsistencia($Asistencia){
        $this->notaTipoNecesidad=$Necesidad;
    }
    public function getNecesitaSilla(){
        return $this->NecesitaSilla;
    }
    public function setNecesitaSilla($silla){
        $this->NecesitaSilla=$silla;
    }
    public function getComidaEspecial(){
        return $this->comidaEspecial;
    }
    public function setComidaEspecial($comida){
        $this->comidaEspecial=$comida;
    }
    public function _toString(){
        $cadena=parent:: _toString();
        $cadena.="\n El pasajero necesita asistencia: ". $this->getAsistencia().
                 "\n El pasajero necesita silla de rueda: ". $this->getNecesitaSilla().
                 "\n El pasajero necesita Comida especial: ". $this->getComidaEspecial();
        return $cadena;
    }
    public function darPorcentajeIncremento($valorPasaje){
        $asistencia=getAsistencia();
        $silla=getNecesitaSilla();
        $comida=getComidaEspecial();
        $cantNecesidad=0;
            if ($asistencia=="si") {
                $cantNecesidad=$cantNecesidad+1;
            }
            if ($silla=="si") {
                $cantNecesidad=$cantNecesidad+1;
            }
            if ($comida=="si") {
                $cantNecesidad=$cantNecesidad+1;
            }
            if ($cantNecesidad>1) {
                $PasajeConIncremento=$valorPasaje*1.35;
            }
            if ($cantNecesidad==1) {
                $PasajeConIncremento=$valorPasaje*1.15;
            }
        return $PasajeConIncremento;
    }
}