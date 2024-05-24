<?php
include_once("Moto.php");

class MotoImportada extends Moto{
    private $paisOrigen;
    private $impuestos;

    public function __construct($eCodigo,$eCosto,$eAnioFabricacion,$eDescripcion,$ePorcentaje,$eActiva,$ePaisOrigen,$eImpiestos){
        parent:: __construct($eCodigo,$eCosto,$eAnioFabricacion,$eDescripcion,$ePorcentaje,$eActiva);
        $this->paisOrigen=$ePaisOrigen;
        $this->impuestos=$eImpiestos;
    }
    //metodos de acceso
    public function getPaisOrigen(){
        return $this->paisOrigen;
    }
    public function getImpuestos(){
        return $this->impuestos;
    }
    //modificadores
    public function setPaisOrigen($ePaisOrigen){
        $this->paisOrigen=$ePaisOrigen;
    }
    public function setImpuestos($ePaisOrigen){
        $this->impuestos=$eImpiestos;
    }
    //funcion __toString()
    public function __toString(){
        $cadena=parent:: __toString();
        $cadena.="Pais de Origen: ". $this->getPaisOrigen()."\n";
        $cadena.="El importe de los Impuestos de importacion es: ". $this->getImpuestos()."\n";
        return $cadena;
    }
    public function darPrecioVenta(){
        $precio=parent::darPrecioVenta();
        if ($precio!=-1) {
            $precio=$precio+$this->getImpuestos();
        }
        return $precio;
    }

}