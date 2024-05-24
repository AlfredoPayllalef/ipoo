<?php
include_once("Moto.php");

class MotoNacional extends Moto{
    private $descuentoNacional;

    public function __construct($eCodigo,$eCosto,$eAnioFabricacion,$eDescripcion,$ePorcentaje,$eActiva){
        parent ::__construct($eCodigo,$eCosto,$eAnioFabricacion,$eDescripcion,$ePorcentaje,$eActiva);
        $this->descuentoNacional=15;
    }
    public function getDescuentoNacional(){
        return $this->descuentoNacional;
    }
    public function setDescuentoNacional($eDescuento){
        $this->descuentoNacional=$eDescuento;
    }
    public function __toString(){
        $cadena=parent::__toString();
        $cadena.="El descuento por productos nacionales es: ". $this->getDescuentoNacional()."\n";
        return $cadena;
    }

    public function darPrecioVenta(){
        $precio=parent::darPrecioVenta();
        if ($precio!=-1) {
            $descuento=$this->getDescuentoNacional();
            $descuento=(100-$descuento)/100;
            $precio=$precio*$descuento;
        }
        return $precio;
    }
}