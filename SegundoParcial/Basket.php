<?php
class Basket extends Partido{
    private $infracciones;
    private $coefPenalizacion;

    public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2,$eInfracciones){
        parent:: __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);
        $this->infracciones=$eInfracciones;
        $this->coefPenalizacion=0.75;

    }
    public function getInfracciones(){
        return $this->infracciones;
    }
    public function getCoefPenalizacion(){
        return $this->coefPenalizacion;
    }
    public function setInfracciones($eInfracciones){
        $this->infracciones=$eInfracciones;
    }
    public function setCoefPenalizacion($eCoefPenalizacion){
        $this->coefPenalizacion=$eCoefPenalizacion;
    }
    public function __toSrtring(){
        $cadena=parent:: __toSrtring();
        $cadena.="Las cantidad de infracciones realizadas fueron: ". $this->getInfracciones()."\n";
        $cadena.="El Coeficiente de penalizacion es de : ". $this->getCoefPenalizacion()."\n";
        return $cadena;
    }

    public function coeficientePartido(){
        $coef=parent:: coeficientePartido();
        $coefBasket=$coef-($this->getCoefPenalizacion()*$this->getInfracciones());
        return $coefBasket;
    }

}