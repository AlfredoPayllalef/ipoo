<?php
include_once("Pasajeros.php");
class PasajeroVip extends Pasajeros{
    private $numPasajFrecuente;
    private $cantMillas;
    
    public function __construct($name,$lastname,$dni,$numTel,$numAsiento,$numTiket,$cMillas,$nFrecuente){
        parent:: __construct($name,$lastname,$dni,$numTel,$numAsiento,$numTiket);
            $this->numPasajFrecuente=$nFrecuente;
            $this->cantMillas=$cMillas;
    }
    public function getnumPasajFrecuente(){
        return $this->numPasajFrecuente;
    }
    public function getcantMillas(){
        return $this->cantMillas;
    }
    public function _toString(){
        $cadena=parent:: _toString();
        $cadena.= "\n el numero de pasajero Frecuente: ". $this->getnumPasajFrecuente().
                  "\n La cantidad de millas acumuladas son: ". $this->getcantMillas();
        return $cadena;
    }
    public function setnumPasajFrecuente($nFrecuente){
        $this->numPasajFrecuente=$nFrecuente;
    }
    public function setcantMillas($cMillas){
        $this->cantMillas=$cMillas;
    }
    public function darPorcentajeIncremento($valorPasaje){
        $millas=$this->getcantMillas();
        $PasajeConIncremento=$valorPasaje*1.35;
        if ($millas>300) {
            $PasajeConIncremento=$PasajeConIncremento*1.30;
        }
        return $PasajeConIncremento;
    }
}