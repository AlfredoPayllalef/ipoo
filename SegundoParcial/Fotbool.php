<?php
class Fotbool extends Partido{
    
    public function __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2,$eCoeficiente){
        parent:: __construct($idpartido, $fecha,$objEquipo1,$cantGolesE1,$objEquipo2,$cantGolesE2);
        parent:: setCoefBase($eCoeficiente);
    }

    public function coeficientePartido(){
        $coeficiente=parent:: coeficientePartido();
        $coefFot=parent::getgetCoefBase();
        $coeficiente=($coeficiente/0.5)*$coefFot;
        return $coeficiente;
    }
    

}